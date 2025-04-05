<?php

// Configurações de exibição de erros para depuração
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

$host = "localhost";
$user = "root";
$password = "";
$dbname = "agitacao_toucas";

header("Content-Type: application/json"); // Define cabeçalho JSON

// Conecta ao banco de dados
$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die(
        json_encode([
            "success" => false,
            "error" =>
                "Falha na conexão com o banco de dados: " .
                $conn->connect_error,
        ])
    );
}

// Processa a ação recebida
$data = json_decode(file_get_contents("php://input"), true);

// Registra o conteúdo recebido para depuração
error_log("Dados recebidos: " . print_r($data, true)); // Registro no log do servidor

$action = $data["action"] ?? "";

//------------------->>>>>>  pagina alunos todos  <<<<<------------
if ($action === "cadastrarAluno") {
    // Inicia a sessão para garantir que a variável de sessão esteja disponível
    session_start();

    $nome = $data["nome"];
    $nascimento = $data["nascimento"];
    $categoria = $data["categoria"];
    $touca = $data["touca"];
    $cadastro_por = isset($_SESSION["user_name"]) ? htmlspecialchars($_SESSION["user_name"]) : "Desconhecido"; // Atribui o nome do usuário da sessão, ou "Desconhecido" caso não exista

    $foto = null; // Inicializa a variável de foto

    // Verifica se há foto sendo enviada
    if (isset($_FILES["foto-aluno"]) && $_FILES["foto-aluno"]["error"] === UPLOAD_ERR_OK) {
        $diretorioFotos = "uploads/fotos/"; // Pasta onde as fotos serão armazenadas
        $nomeFoto = basename($_FILES["foto-aluno"]["name"]);
        $caminhoFoto = $diretorioFotos . $nomeFoto;

        // Move o arquivo para o diretório desejado
        if (move_uploaded_file($_FILES["foto-aluno"]["tmp_name"], $caminhoFoto)) {
            $foto = $caminhoFoto; // Caminho da foto salva
        } else {
            echo json_encode(["success" => false, "error" => "Erro ao fazer upload da foto."]);
            exit();
        }
    }

    // Inicia uma transação para garantir consistência
    $conn->begin_transaction();

    try {
        // Insere o aluno no banco de dados com o campo de foto e cadastro_por
        $sqlAluno = "INSERT INTO tabela_alunos (nome, nascimento, categoria, touca, foto, cadastro_por)
                    VALUES ('$nome', '$nascimento', '$categoria', '$touca', '$foto', '$cadastro_por')";
        if (!$conn->query($sqlAluno)) {
            throw new Exception("Erro ao cadastrar aluno: " . $conn->error);
        }

        // Decrementa o estoque da touca
        $sqlTouca = "UPDATE tabelas_toucas SET estoque = estoque - 1 WHERE cor = '$touca' AND estoque > 0";
        if ($conn->query($sqlTouca) === false || $conn->affected_rows === 0) {
            throw new Exception("Erro ao atualizar estoque: Touca esgotada ou inexistente.");
        }

        // Confirma a transação
        $conn->commit();

        echo json_encode([
            "success" => true,
            "message" => "Aluno cadastrado com sucesso e estoque atualizado!"
        ]);
    } catch (Exception $e) {
        // Desfaz a transação em caso de erro
        $conn->rollback();
        echo json_encode(["success" => false, "error" => $e->getMessage()]);
    }
}



    elseif ($action === "listarAlunos") {
        $sql = "SELECT * FROM tabela_alunos ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $alunos = [];
            while ($row = $result->fetch_assoc()) {
                $alunos[] = $row;
            }
            echo json_encode(["success" => true, "data" => $alunos]);
        } else {
            echo json_encode(["success" => true, "data" => []]);
        }
    }

    // Inicializa a página ao carregar
    elseif ($action === "removerAluno") {
        // Conecta ao banco de dados
        $dbConn = new mysqli($host, $user, $password, $dbname);
        if ($dbConn->connect_error) {
            die(
                json_encode([
                    "success" => false,
                    "error" => "Falha na conexão com o banco de dados.",
                ])
            );
        }

        // Processa a ação recebida
        $data = json_decode(file_get_contents("php://input"), true);

        // Adicione um log para depuração
        error_log("Dados recebidos no PHP: " . print_r($data, true)); // Adiciona log para ver o que foi recebido

        $alunoId = $data["id"] ?? null; // ID do aluno

        // Verifica se o ID foi realmente enviado
        if (!$alunoId) {
            echo json_encode([
                "success" => false,
                "error" => "ID do aluno não fornecido.",
            ]);
            exit();
        }

        // Deleta o aluno da tabela
        $sqlRemoverAluno = "DELETE FROM tabela_alunos WHERE id = '$alunoId'";

        if ($dbConn->query($sqlRemoverAluno) === true) {
            echo json_encode([
                "success" => true,
                "message" => "Aluno removido com sucesso!",
            ]);
        } else {
            echo json_encode([
                "success" => false,
                "error" => "Erro ao remover aluno: " . $dbConn->error,
            ]);
        }
    } 
    elseif ($data["action"] === "editarAluno") {
        // Conecta ao banco de dados
        $dbConn = new mysqli($host, $user, $password, $dbname);
        if ($dbConn->connect_error) {
            die(
                json_encode([
                    "success" => false,
                    "error" => "Falha na conexão com o banco de dados.",
                ])
            );
        }

        $id = $data["id"];
        $nome = $data["nome"];
        $touca = $data["touca"];
        $toucaAnterior = $data["toucaAnterior"] ?? null; // Pode ser nula
        $nascimento = $data["nascimento"];
        $categoria = $data["categoria"];

        if (!$id || !$nome || !$nascimento || !$categoria) {
            echo json_encode(["success" => false, "error" => "Dados incompletos."]);
            exit();
        }

        // Atualiza os dados do aluno
        $sqlUpdate =
            "UPDATE tabela_alunos SET nome = ?, touca = ?, nascimento = ?, categoria = ? WHERE id = ?";
        if ($stmtUpdate = $dbConn->prepare($sqlUpdate)) {
            $stmtUpdate->bind_param(
                "ssssi",
                $nome,
                $touca,
                $nascimento,
                $categoria,
                $id
            );

            if ($stmtUpdate->execute()) {
                // Gerencia os estoques de toucas
                if ($touca && $touca !== $toucaAnterior) {
                    // Decrementa o estoque da nova touca
                    $sqlDecrementar =
                        "UPDATE tabelas_toucas SET estoque = estoque - 1 WHERE cor = ?";
                    if ($stmtDecrementar = $dbConn->prepare($sqlDecrementar)) {
                        $stmtDecrementar->bind_param("s", $touca);

                        if (!$stmtDecrementar->execute()) {
                            echo json_encode([
                                "success" => false,
                                "error" => "Erro ao decrementar estoque.",
                            ]);
                            exit();
                        }
                    } else {
                        echo json_encode([
                            "success" => false,
                            "error" =>
                                "Erro ao preparar a consulta para decrementar estoque.",
                        ]);
                        exit();
                    }
                }

                echo json_encode([
                    "success" => true,
                    "message" => "Aluno atualizado com sucesso!",
                ]);
            } else {
                echo json_encode([
                    "success" => false,
                    "error" => "Erro ao atualizar aluno.",
                ]);
            }

            $stmtUpdate->close();
        } else {
            echo json_encode([
                "success" => false,
                "error" => "Erro ao preparar a consulta para atualizar aluno.",
            ]);
        }

        $dbConn->close();
    }

    //------------------->>>>>> dashboard adulto <<<<<------------
    elseif ($action === "listarAlunosHome") {
        // Prepara a consulta SQL
        $queryListarAlunos = "SELECT * FROM tabela_alunos WHERE categoria = ? ORDER BY data_cadastro DESC";
        
        // Prepara a declaração
        if ($stmt = $conn->prepare($queryListarAlunos)) {
            $categoria = 'Adulto';
            // Liga os parâmetros
            $stmt->bind_param("s", $categoria);
            
            // Executa a declaração
            $stmt->execute();
            
            // Obtém o resultado
            $resultadoConsultaA = $stmt->get_result();
            
            // Verifica se há resultados
            if ($resultadoConsultaA->num_rows > 0) {
                $listaDeAlunos = $resultadoConsultaA->fetch_all(MYSQLI_ASSOC);
                echo json_encode(["success" => true, "data" => $listaDeAlunos]);
            } else {
                echo json_encode(["success" => true, "data" => []]);
            }
            
            // Fecha a declaração
            $stmt->close();
        } else {
            echo json_encode(["success" => false, "message" => "Erro ao preparar a consulta."]);
        }
    } 
    elseif ($action === "obterEstoqueToucas") {
        $sql =
            "SELECT cor, estoque FROM tabelas_toucas WHERE categoria_touca = 'Adulto'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $toucas = [];
            while ($row = $result->fetch_assoc()) {
                $toucas[] = $row;
            }
            echo json_encode(["success" => true, "data" => $toucas]);
        } else {
            echo json_encode(["success" => true, "data" => []]);
        }
    } 
    elseif ($action === "contarAlunosPorCor") {
        $sql = "SELECT touca, COUNT(*) AS quantidade
            FROM tabela_alunos
            WHERE categoria = 'Adulto'
            GROUP BY touca";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $contagem = [];
            while ($row = $result->fetch_assoc()) {
                $contagem[$row["touca"]] = $row["quantidade"];
            }
            echo json_encode(["success" => true, "data" => $contagem]);
        } else {
            echo json_encode(["success" => true, "data" => []]);
        }
    }
    //------------------->>>>>> dashboard infantil <<<<<------------
    

    elseif ($action === "listarAlunosHomeInfantil") {
        // Prepara a consulta SQL
        $queryListarAlunos = "SELECT * FROM tabela_alunos WHERE categoria = ? ORDER BY data_cadastro DESC";
        
        // Prepara a declaração
        if ($stmt = $conn->prepare($queryListarAlunos)) {
            $categoria = 'Infantil';
            // Liga os parâmetros
            $stmt->bind_param("s", $categoria);
            
            // Executa a declaração
            $stmt->execute();
            
            // Obtém o resultado
            $resultadoConsulta = $stmt->get_result();
            
            // Verifica se há resultados
            if ($resultadoConsulta->num_rows > 0) {
                $listaDeAlunosInfantil = $resultadoConsulta->fetch_all(MYSQLI_ASSOC);
                echo json_encode(["success" => true, "data" => $listaDeAlunosInfantil]);
            } else {
                echo json_encode(["success" => true, "data" => []]);
            }
            
            // Fecha a declaração
            $stmt->close();
        } else {
            echo json_encode(["success" => false, "message" => "Erro ao preparar a consulta."]);
        }
    }

    
    elseif ($action === "obterEstoqueToucasInfantil") {
        // Retorna todos os estoques de toucas para a categoria "Adulto"
        $sql =
            "SELECT cor, estoque FROM tabelas_toucas WHERE categoria_touca = 'Infantil'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $toucas = [];
            while ($row = $result->fetch_assoc()) {
                $toucas[] = $row;
            }
            echo json_encode(["success" => true, "data" => $toucas]);
        } else {
            echo json_encode(["success" => true, "data" => []]);
        }
    } 
    elseif ($action === "contarAlunosPorCorInfantil") {
        // Contar alunos por cor de touca na categoria "Adulto"
        $sql = "SELECT touca, COUNT(*) AS quantidade
            FROM tabela_alunos
            WHERE categoria = 'Infantil'
            GROUP BY touca";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $contagem = [];
            while ($row = $result->fetch_assoc()) {
                $contagem[$row["touca"]] = $row["quantidade"];
            }
            echo json_encode(["success" => true, "data" => $contagem]);
        } else {
            echo json_encode(["success" => true, "data" => []]);
        }
    }

    //------------------->>>>>> pagina Estoque Toucas Geral <<<<<------------
    elseif ($action === "listarToucas") {
        // Lista as toucas disponíveis e seus estoques
        $sql = "SELECT cor, estoque FROM tabelas_toucas WHERE estoque > 0";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $toucas = [];
            while ($row = $result->fetch_assoc()) {
                $toucas[] = $row;
            }
            echo json_encode(["success" => true, "data" => $toucas]);
        } else {
            echo json_encode(["success" => true, "data" => []]);
        }
    } else {
        echo json_encode(["success" => false, "error" => "Ação inválida."]);
        exit();
    }

    $conn->close();
?>