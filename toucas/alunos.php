<?php require 'autentica.php'; // Ou use include; ?>

<?php include 'header.html'; ?>




<main class="u-main" role="main">

    <aside id="sidebar" class="u-sidebar">
        <div class="u-sidebar-inner">
            <header class="u-sidebar-header">
                <a class="u-sidebar-logo" href="adulto.html">
                    <img class="img-fluid" src="./assets/img/logo-agitacao.webp" width="124" alt="Agitação">
                </a>
            </header>

            <nav class="u-sidebar-nav">
                <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                    <!-- Menu Dashboard -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="#!" data-target="#baseUI">
                            <i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="baseUI" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                            style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="./adulto.php">
                                    <span class="u-sidebar-nav-menu__item-icon">A</span>
                                    <span class="u-sidebar-nav-menu__item-title">Adulto</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link" href="./infantil.php">
                                    <span class="u-sidebar-nav-menu__item-icon">I</span>
                                    <span class="u-sidebar-nav-menu__item-title">Infantil</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Menu Estoque -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link" href="./toucas.php">
                            <i class="far fa-edit u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Estoque de Toucas</span>
                        </a>
                    </li>

                    <!-- Menu Alunos -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link active" href="./alunos.php">
                            <i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Alunos</span>
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
    </aside>


    <div class="u-content">

        <div class="u-body">
            <h1 class="h2 font-weight-semibold mb-4">Alunos</h1>

            <!-- Botão para abrir o formulário -->
            <button id="botao-cadastrar-aluno" type="button" class="btn btn-soft-info">Cadastrar novo aluno</button>
            <br>


            <!-- Formulário para cadastrar aluno (inicialmente oculto) -->
            <div id="form-cadastrar-aluno" style="display: none; margin-top: 20px;">

                <form id="cadastrar-aluno-form">
                    <div class="form-group">
                        <label for="nome-aluno">Nome do Aluno:</label>
                        <input type="text" id="nome-aluno" class="form-control" required>
                    </div>
                    <!-- <div class="form-group">
							<label for="foto-aluno">Foto:</label>
							<input type="file" id="foto-aluno" accept="image/*">
						</div> -->
                    <div class="form-group">
                        <label for="nascimento-aluno">Data de Nascimento:</label>
                        <input type="date" id="nascimento-aluno" class="form-control" required>
                    </div>
                    <!-- Alterando o campo de Categoria para checkbox -->
                    <div class="form-group form-check">
                        <p>Categoria:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="categoria-adulto" name="categoria-aluno"
                                value="Adulto">
                            Adulto
                            <label class="form-check-label" for="categoria-adulto"> </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="categoria-infantil" name="categoria-aluno"
                                value="Infantil">
                            Infantil
                            <label class="form-check-label" for="categoria-infantil"> </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="touca-aluno">Touca:</label>
                        <select id="touca-aluno" class="form-control">
                            <option value="">Selecione uma touca</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-soft-success">Salvar</button>
                    <button type="button" id="cancelar-form" class="btn btn-soft-danger">Cancelar</button>
                </form>
            </div>



            <!-- Formulário de Edição do Aluno  -->
            <div id="editarAlunoModal" style="display: none;">
                <h3>Editar Aluno</h3>
                <small style="color: red"> FALTA FAZER DECREMENTAR CASO ALTERE A TOUCA. FAZ A FUNÇÃO OU PEDE PRA DELETAR
                    E INSERIR NOVAMENTE.</small>
                <form id="formEditarAluno">
                    <div class="form-group">
                        <input type="hidden" id="alunoId" name="id">
                        <label for="nome">Nome:</label>
                        <input class="form-control" type="text" id="nome" name="nome" required><br>

                        <label for="touca">Touca:</label>
                        <select class="form-control" id="touca" name="touca" data-previous-touca="${aluno.touca}">
                            <!-- As opções de touca serão carregadas dinamicamente aqui -->
                        </select><br>

                        <label for="nascimento">Nascimento:</label>
                        <input class="form-control" type="date" id="nascimento" name="nascimento"><br>

                        <label for="categoria">Categoria:</label>
                        <input class="form-control" type="text" id="categoria" name="categoria"><br>
                    </div>
                    <button class="btn btn-soft-success" type="submit">Salvar Alterações</button>
                </form>
            </div>






            <br>
            <div class="card mb-4">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Tabela completa dos Alunos</h2>
                        <br>
                        <div>
                            <label for="filtro-sub-categoria">Filtrar por Sub-categoria:</label>
                            <select id="filtro-sub-categoria" class="form-control form-control-sm" style="width: max-content;background: #e2ecfc;border: 0;">
                                <option value="">Todos</option>
                                <option value="Pré-mirim">Pré-mirim</option>
                                <option value="Mirim">Mirim</option>
                                <option value="Petiz">Petiz</option>
                                <option value="Infantil">Infantil</option>
                                <option value="Juvenil">Juvenil</option>
                                <option value="Júnior">Júnior</option>
                                <option value="Pré-Master">Pré-Master</option>
                                <option value="25+">25+</option>
                                <option value="30+">30+</option>
                                <option value="35+">35+</option>
                                <option value="40+">40+</option>
                                <option value="45+">45+</option>
                                <option value="50+">50+</option>
                                <option value="55+">55+</option>
                                <option value="60+">60+</option>
                                <option value="65+">65+</option>
                                <option value="70+">70+</option>
                            </select>
                        </div>
                </header>

                <div class="card-body">
                    <div class="table-responsive">



                        <!-- Tabela para listar os alunos -->
                        <table id="tabela-todos-alunos" class="table table-hover">
                            <thead style="text-align: left; background: #e2ecfc;">
                                <tr>
                                    <th><i class="fas fa-circle"></i></th>
                                    <th><i class="fas fa-user"></i> Nome</th>
                                    <th><i class="fas fa-swimmer"></i> Touca</th>
                                    <th><i class="fas fa-calendar-check"></i> Nascimento</th>
                                    <th><i class="fab fa-pagelines"></i> Idade</th>
                                    <th><i class="fas fa-stream"></i> Sub-Categoria</th>
                                    <th><i class="fas fa-sign-out-alt"></i> Retirada da touca</th>
                                    <th><i class="fas fa-user-circle"></i> Por</th>
                                    <th><i class="fas fa-wrench"></i> Ações</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>



    </div>
</main>


<script>
const backendUrl = "http://localhost/toucas/cadastro/backend.php";

// Inicializa a página ao carregar
document.addEventListener("DOMContentLoaded", () => {
    atualizarTabelaAlunos();
    carregarToucas(); // Carrega as opções de toucas no select
});

// Exibe o formulário ao clicar no botão de cadastrar
document.getElementById("botao-cadastrar-aluno").addEventListener("click", () => {
    document.getElementById("form-cadastrar-aluno").style.display = "block";
});

// Esconde o formulário ao clicar no botão de cancelar
document.getElementById("cancelar-form").addEventListener("click", () => {
    document.getElementById("form-cadastrar-aluno").style.display = "none";
    document.getElementById("cadastrar-aluno-form").reset();
});

// Função para cadastrar aluno
document.getElementById("cadastrar-aluno-form").addEventListener("submit", async (event) => {
    event.preventDefault();

    // Coleta os dados do formulário
    const nome = document.getElementById("nome-aluno").value.trim();
    const touca = document.getElementById("touca-aluno").value;
    const nascimento = document.getElementById("nascimento-aluno").value.trim();

    // Coleta as categorias selecionadas
    const categoriasSelecionadas = [];
    if (document.getElementById("categoria-adulto").checked) {
        categoriasSelecionadas.push("Adulto");
    }
    if (document.getElementById("categoria-infantil").checked) {
        categoriasSelecionadas.push("Infantil");
    }

    // Verifica se alguma categoria foi selecionada
    if (categoriasSelecionadas.length === 0) {
        alert("Selecione ao menos uma categoria!");
        return;
    }

    const alunoData = {
        action: "cadastrarAluno",
        nome: nome,
        nascimento: nascimento,
        categoria: categoriasSelecionadas.join(
            ", "), // Envia as categorias selecionadas separadas por vírgula
        touca: touca,
    };

    try {
        const response = await fetch(backendUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(alunoData),
        });

        const result = await response.json();
        if (result.success) {
            alert("Aluno cadastrado com sucesso!");
            atualizarTabelaAlunos(); // Atualiza a tabela
            carregarToucas(); // Atualiza o estoque de toucas
            document.getElementById("form-cadastrar-aluno").style.display = "none";
            document.getElementById("cadastrar-aluno-form").reset();
        } else {
            alert(`Erro: ${result.error}`);
        }
    } catch (error) {
        console.error("Erro ao cadastrar aluno:", error);
        alert("Erro ao conectar com o servidor.");
    }
});

// Função para carregar toucas no select
async function carregarToucas() {
    try {
        const response = await fetch(backendUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "listarToucas"
            }),
        });

        const result = await response.json();
        if (result.success) {
            const selectTouca = document.getElementById("touca-aluno");
            selectTouca.innerHTML = '<option value="">Selecione uma touca</option>'; // Limpa as opções

            result.data.forEach((touca) => {
                const option = document.createElement("option");
                option.value = touca.cor; // Valor enviado ao servidor
                option.textContent = `${touca.cor} (Estoque: ${touca.estoque})`;
                selectTouca.appendChild(option);
            });
        } else {
            alert(`Erro ao carregar toucas: ${result.error}`);
        }
    } catch (error) {
        console.error("Erro ao carregar toucas:", error);
    }
}



function calcularIdade(nascimento) {
    const dataNascimento = new Date(nascimento);
    const hoje = new Date();
    let idade = hoje.getFullYear() - dataNascimento.getFullYear(); // Use let aqui
    const m = hoje.getMonth() - dataNascimento.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < dataNascimento.getDate())) {
        idade--;
    }
    return idade;
}


let alunosData = []; // Array para armazenar os dados dos alunos

// Função para atualizar a tabela de alunos
async function atualizarTabelaAlunos() {
    try {
        const response = await fetch(backendUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "listarAlunos"
            }),
        });

        const result = await response.json();
        if (result.success) {
            const tabela = document.getElementById("tabela-todos-alunos").querySelector("tbody");
            tabela.innerHTML = "";

            // Armazenar os dados dos alunos no array
            alunosData = result.data; // Salva todos os alunos no array

            result.data.forEach((aluno, index) => {

                //console.log("Aluno ID:", aluno.id);  // Verifique o valor do ID aqui

                // Determina a classe da touca com base na cor
                let toucaClasse = "badge badge-soft-info"; // Classe padrão (Azul)
                if (aluno.touca === "Vermelha") {
                    toucaClasse = "badge badge-soft-danger";
                } else if (aluno.touca === "Amarela") {
                    toucaClasse = "badge badge-soft-warning";
                } else if (aluno.touca === "Verde") {
                    toucaClasse = "badge badge-soft-success";
                } else if (aluno.touca === "Azul") {
                    toucaClasse = "badge badge-soft-info";
                } else if (aluno.touca === "Cinza") {
                    toucaClasse = "badge badge-soft-cinza";
                } else if (aluno.touca === "Branca") {
                    toucaClasse = "badge badge-soft-branca";
                } else if (aluno.touca === "Preta") {
                    toucaClasse = "badge badge-soft-preta";
                } else if (aluno.touca === "Lilas") {
                    toucaClasse = "badge badge-soft-lilas";
                } else if (aluno.touca === "Laranja") {
                    toucaClasse = "badge badge-soft-laranja";
                } else if (aluno.touca === "Marrom") {
                    toucaClasse = "badge badge-soft-marrom";
                } else if (aluno.touca === "Rosa") {
                    toucaClasse = "badge badge-soft-rosa";
                } else if (aluno.touca === "Prata") {
                    toucaClasse = "badge badge-soft-prata";
                }

                const idade = calcularIdade(aluno.nascimento);

                const row = `
							<tr id="aluno-${aluno.id}">
								<td>${index + 1}</td>
								<td>${aluno.nome}</td>
								<td><a class="${toucaClasse}" href="#">${aluno.touca || "N/A"}</a></td>
								<td>${aluno.nascimento}</td>
                                <td>${idade} </td>
								<td>${aluno.sub_categoria}</td>
								<td>${aluno.data_cadastro}</td>
								<td>${aluno.cadastro_por}</td>
								<td>
									<a id="actions1Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
										<i class="fa fa-sliders-h"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions1Invoker">
										<ul class="list-unstyled mb-0">
											<li>
												<!-- Botão Editar - Chama a função editarAluno passando o id do aluno -->
												<a class="d-flex align-items-center link-muted py-2 px-3" href="#editarAlunoModal" onclick="editarAluno(${aluno.id})">
													<i class="fa fa-edit mr-2"></i> Editar
												</a>
											</li>
											<li>
												<a class="d-flex align-items-center link-muted py-2 px-3" href="javascript:void(0)" onclick="removerAluno(${aluno.id})">
													<i class="fa fa-minus mr-2"></i> Remover
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						`;
                tabela.insertAdjacentHTML("beforeend", row);
            });

            // Adiciona o listener de clique após a tabela ser renderizada
            tabela.addEventListener("click", function(event) {
                // Verifica se o link de remoção foi clicado
                if (event.target.closest("a") && event.target.closest("a").dataset.alunoId) {
                    const alunoId = event.target.closest("a").dataset.alunoId;
                    console.log("ID do aluno removido:",
                        alunoId); // Verifique o ID antes de chamar a função
                    removerAluno(alunoId); // Chama a função de remoção com o ID
                }
            });

        } else {
            alert(`Erro ao listar alunos: ${result.error}`);
        }
    } catch (error) {
        console.error("Erro ao carregar a tabela de alunos:", error);
    }
}




// Adiciona evento ao filtro de subcategoria
document.getElementById("filtro-sub-categoria").addEventListener("change", function() {
    const subCategoriaSelecionada = this.value; // Obtém a subcategoria selecionada
    filtrarTabelaPorSubCategoria(subCategoriaSelecionada);
});


// Função para filtrar a tabela de alunos
function filtrarTabelaPorSubCategoria(subCategoria) {
    const tabela = document.getElementById("tabela-todos-alunos").querySelector("tbody");
    tabela.innerHTML = ""; // Limpa a tabela antes de exibir os dados filtrados

    // Filtra os alunos com base na subcategoria selecionada
    const alunosFiltrados = subCategoria 
        ? alunosData.filter(aluno => aluno.sub_categoria === subCategoria)
        : alunosData;

    // Re-renderiza os alunos filtrados na tabela
    alunosFiltrados.forEach((aluno, index) => {
        const idade = calcularIdade(aluno.nascimento);

        // Determina a classe da touca com base na cor
        let toucaClasse = "badge badge-soft-info"; // Classe padrão (Azul)
                if (aluno.touca === "Vermelha") {
                    toucaClasse = "badge badge-soft-danger";
                } else if (aluno.touca === "Amarela") {
                    toucaClasse = "badge badge-soft-warning";
                } else if (aluno.touca === "Verde") {
                    toucaClasse = "badge badge-soft-success";
                } else if (aluno.touca === "Azul") {
                    toucaClasse = "badge badge-soft-info";
                } else if (aluno.touca === "Cinza") {
                    toucaClasse = "badge badge-soft-cinza";
                } else if (aluno.touca === "Branca") {
                    toucaClasse = "badge badge-soft-branca";
                } else if (aluno.touca === "Preta") {
                    toucaClasse = "badge badge-soft-preta";
                } else if (aluno.touca === "Lilas") {
                    toucaClasse = "badge badge-soft-lilas";
                } else if (aluno.touca === "Laranja") {
                    toucaClasse = "badge badge-soft-laranja";
                } else if (aluno.touca === "Marrom") {
                    toucaClasse = "badge badge-soft-marrom";
                } else if (aluno.touca === "Rosa") {
                    toucaClasse = "badge badge-soft-rosa";
                } else if (aluno.touca === "Prata") {
                    toucaClasse = "badge badge-soft-prata";
                }

        const row = `
            <tr id="aluno-${aluno.id}">
                <td>${index + 1}</td>
                <td>${aluno.nome}</td>
                <td><a class="${toucaClasse}" href="#">${aluno.touca || "N/A"}</a></td>
                <td>${aluno.nascimento}</td>
                <td>${idade}</td>
                <td>${aluno.sub_categoria}</td>
                <td>${aluno.data_cadastro}</td>
                <td>${aluno.cadastro_por}</td>
                <td>
                    <a id="actions1Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                        <i class="fa fa-sliders-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions1Invoker">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#editarAlunoModal" onclick="editarAluno(${aluno.id})">
                                    <i class="fa fa-edit mr-2"></i> Editar
                                </a>
                            </li>
                            <li>
                                <a class="d-flex align-items-center link-muted py-2 px-3" href="javascript:void(0)" onclick="removerAluno(${aluno.id})">
                                    <i class="fa fa-minus mr-2"></i> Remover
                                </a>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        `;
        tabela.insertAdjacentHTML("beforeend", row);
    });
}




// Função para remover aluno
async function removerAluno(alunoId) {

    //console.log("ID do aluno (frontend):", alunoId);  // Verifica se o ID está correto

    // Se o aluno não for encontrado no array
    const aluno = alunosData.find(a => a.id == alunoId); // Encontra o aluno no array
    if (!aluno) {
        alert("Aluno não encontrado.");
        return;
    }

    // Confirmação antes de remover
    if (!confirm(`Tem certeza que deseja remover o aluno ${aluno.nome}?`)) {
        return;
    }


    try {

        const aluno = alunosData.find(a => a.id == alunoId); // Encontra o aluno no array
        if (!aluno) {
            alert("Aluno não encontrado.");
            return;
        }

        const bodyData = JSON.stringify({
            action: "removerAluno",
            id: alunoId, // Certifique-se de que alunoId esteja sendo passado corretamente
        });

        //console.log("Corpo da requisição:", bodyData);  // Verifica o corpo da requisição

        const response = await fetch(backendUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: bodyData,
        });

        // Processar a resposta como JSON
        const result = await response.json();
        //console.log("Resposta do servidor:", result);

        if (result.success) {
            alert('Aluno(a) removido com sucesso!');
            // Atualiza a tabela de alunos ou faz outra ação necessária
            atualizarTabelaAlunos();
        } else {
            alert(`Erro ao remover aluno: ${result.error}`);
        }
    } catch (error) {
        console.error("Erro ao remover aluno:", error);
        alert("Erro ao conectar com o servidor.");
    }
}





// Função para carregar as opções de toucas
function CarregarToucasEditar() {
    const selectTouca = document.getElementById("touca");
    selectTouca.innerHTML = ""; // Limpa as opções existentes

    const toucas = [
        "Vermelha", "Amarela", "Verde", "Azul", "Cinza",
        "Branca", "Preta", "Lilas", "Laranja", "Marrom",
        "Rosa", "Prata"
    ];

    toucas.forEach(touca => {
        const option = document.createElement("option");
        option.value = touca;
        option.textContent = touca;
        selectTouca.appendChild(option);
    });

    // Define o valor atual selecionado, se disponível
    const toucaAtual = selectTouca.dataset.previousTouca || "";
    if (toucaAtual) {
        selectTouca.value = toucaAtual;
    }
}

// Função para editar aluno
async function editarAluno(alunoId) {
    const aluno = alunosData.find(a => a.id == alunoId);
    if (!aluno) {
        alert("Aluno não encontrado.");
        return;
    }

    // Preenche o formulário
    document.getElementById("alunoId").value = aluno.id;
    document.getElementById("nome").value = aluno.nome;
    document.getElementById("nascimento").value = aluno.nascimento;
    document.getElementById("categoria").value = aluno.categoria;

    const selectTouca = document.getElementById("touca");
    selectTouca.dataset.previousTouca = aluno.touca || ""; // Salva touca anterior
    CarregarToucasEditar();

    document.getElementById("editarAlunoModal").style.display = "block";
}

// Salvar alterações do aluno
document.getElementById("formEditarAluno").addEventListener("submit", async function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário

    const alunoId = document.getElementById("alunoId").value;
    const nome = document.getElementById("nome").value;
    const nascimento = document.getElementById("nascimento").value;
    const categoria = document.getElementById("categoria").value;
    const touca = document.getElementById("touca").value;
    const toucaAnterior = document.getElementById("touca").dataset.previousTouca;

    if (!nome || !nascimento || !categoria) {
        alert("Por favor, preencha todos os campos obrigatórios.");
        return;
    }

    try {
        const response = await fetch(backendUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "editarAluno",
                id: alunoId,
                nome,
                nascimento,
                categoria,
                touca,
                toucaAnterior,
            }),
        });

        // Captura e analisa a resposta
        const text = await response.text();
        //console.log("Resposta bruta do servidor:", text);

        const result = JSON.parse(text);

        if (result.success) {
            alert(`Aluno ${nome} editado com sucesso!`);
            atualizarTabelaAlunos();
            document.getElementById("editarAlunoModal").style.display = "none";
        } else {
            alert(`Erro ao editar aluno: ${result.error}`);
        }
    } catch (error) {
        console.error("Erro ao conectar ao servidor:", error);
        alert("Erro ao conectar com o servidor.");
    }
});
</script>



<?php include 'scripts.html'; ?>