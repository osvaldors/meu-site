<?php require 'autentica.php'; // Ou use include; ?>
<?php include 'header.html'; ?>

<main class="u-main" role="main">
    <!-- Sidebar -->
    <aside id="sidebar" class="u-sidebar">
        <div class="u-sidebar-inner">
            <header class="u-sidebar-header">
                <a class="u-sidebar-logo" href="adulto.php">
                    <img class="img-fluid" src="./assets/img/logo-agitacao.webp" width="124" alt="Agitação Esportes">
                </a>
            </header>

            <nav class="u-sidebar-nav">
                <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                    <!-- Menu Dashboard -->
                    <li class="u-sidebar-nav-menu__item">
                        <a class="u-sidebar-nav-menu__link active" href="#!" data-target="#baseUI">
                            <i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Dashboard</span>
                            <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                            <span class="u-sidebar-nav-menu__indicator"></span>
                        </a>

                        <ul id="baseUI" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level"
                            style="display: none;">
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link active" href="./adulto.php">
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
                        <a class="u-sidebar-nav-menu__link" href="./alunos.php">
                            <i class="far fa-user-circle u-sidebar-nav-menu__item-icon"></i>
                            <span class="u-sidebar-nav-menu__item-title">Alunos</span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- fim Sidebar -->

    <div class="u-content">
        <div class="u-body">
            <!-- Estoque das toucas adulto -->
            <h2>ADULTO | Estoque de toucas</h2>
            <div class="row">
                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                                <!-- <div id="qt-azul" class="u-doughnut__label text-danger"></div> -->
                                <canvas class="js-doughnut-chart" width="70" height="70" data-set="[,]"
                                    data-colors='[ "#2972fa","#f6f9fc"]' data-touca="azul"></canvas>

                                <!-- <div id="qt-azul" class="u-doughnut__label text-info"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca AZUL
                                </h5>
                                <span id="qt-azul" class="h2 mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                                <!-- <div id="qt-amarela" class="u-doughnut__label text-danger"></div> -->
                                <canvas class="js-doughnut-chart" width="70" height="70" data-set="[,]" data-colors='[
                              "#fab633",
										          "#f6f9fc"
										        ]' data-touca="amarela"></canvas>

                                <!-- <div id="qt-amarela" class="u-doughnut__label text-warning"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca AMARELA
                                </h5>
                                <span id="qt-amarela" class="h2 mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                                <!-- <div id="qt-verde" class="u-doughnut__label text-danger"></div> -->
                                <canvas class="js-doughnut-chart" width="70" height="70" data-set="[,]" data-colors='[
                              "#0dd157",
										          "#f6f9fc"
										        ]' data-touca="verde"></canvas>

                                <!-- <div id="qt-verde" class="u-doughnut__label text-success"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca VERDE
                                </h5>
                                <span id="qt-verde" class="h2 mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                                <!-- <div id="qt-vermelha" class="u-doughnut__label text-danger"></div> -->
                                <canvas class="js-doughnut-chart" width="70" height="70" data-set="[,]" data-colors='[
                              "#fb4143",
										          "#f6f9fc"
										        ]' data-touca="vermelha"></canvas>

                                <!-- <div id="qt-vermelha" class="u-doughnut__label text-danger"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca VERMELHA
                                </h5>
                                <span id="qt-vermelha" class="h2 mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fim visão geral estoque das toucas adulto -->

            <div class="row">
                <!-- últimos alunos cadastrados -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="card h-100">
                        <header class="card-header d-flex align-items-center">
                            <h2 class="h3 card-header-title">Adulto | Últimos Alunos cadastrados</h2>


                            <ul class="list-inline ml-auto mb-0">
                                <li class="list-inline-item">
                                    <a class="link-muted h3" href="#!">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </li>
                            </ul>

                        </header>

                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-4">
                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Total
                                        de alunos</span>
                                    <span class="h4 text-primary"> </span>
                                </div>

                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Azul</span>
                                    <span class="h4 text-info"> </span>
                                </div>

                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">
                                        Amarela</span>
                                    <span class="h4 text-warning"> </span>
                                </div>


                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Verde</span>
                                    <span class="h4 text-success"> </span>
                                </div>

                                <div class="divider divider-vertical mx-2"></div>



                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Vermelha</span>
                                    <span class="h4 text-danger"> </span>
                                </div>

                            </div>

                            <div class="table-responsive" style="overflow: overlay;height: 410px;">
                                <!-- tabela ultimos alunos-->



                                <table id="tabela-todos-alunos-home" class="table align-middle mb-0">
                                    <thead class="table-active text-muted">
                                        <tr class="small text-muted text-uppercase">
                                            <th>Nome</th>
                                            <th>Idade</th>
                                            <th>-</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="align-middle">
                                                <div class="media align-items-center">
                                                    <div>
                                                        <img class="u-avatar rounded-circle mr-3"
                                                            src="./assets/img/usuarios/user.jpg"
                                                            alt="Image description">
                                                    </div>

                                                    <div class="media-body">
                                                        <h4 class="mb-0"></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle font-weight-semibold">
                                            </td>

                                            <td class="align-middle">
                                                <div class="progress" style="height: 6px; border-radius: 3px;">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                        style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <footer class="card-footer">
                            <a class="u-link u-link--primary" href="./alunos.php">Todos alunos</a>
                        </footer>
                    </div>
                </div>


                <!-- Alunos por toucas -->
                <div class="col-md-3">
                    <!--Lista de alunos adulto azul-->
                    <div class="card">
                        <header style="background: #2972fa;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">AZUL</h2>
                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-azul" class="list-group list-lg-group list-group-flush">
                                <!-- Aqui os alunos com touca azul serão adicionados dinamicamente -->
                            </div>

                        </div>

                    </div>
                    <br>
                    <!-- lista de alunos adulto amarela -->
                    <div class="card">
                        <header style="background: #fab634;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">AMARELA</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-amarela" class="list-group"></div>

                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <!--Lista de alunos adulto verde-->
                    <div class="card">
                        <header style="background: #0baa13;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">VERDE</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-verde" class="list-group"></div>

                        </div>

                    </div>
                    <br>
                    <!--Lista de alunos adulto vermelha-->
                    <div class="card">
                        <header style="background: #e04e4e;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">VERMELHA</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-vermelha" class="list-group"></div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    </div>
</main>




<script>
document.addEventListener("DOMContentLoaded", () => {
    atualizarEstoqueToucas();
    atualizarDashboard();
    atualizarContagemAlunosPorCor();
    atualizarTabela();
    atualizarListaAlunosPorCor();
});

async function atualizarEstoqueToucas() {
    try {
        const response = await fetch("http://localhost/toucas/cadastro/backend.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "obterEstoqueToucas"
            }),
        });

        const result = await response.json();

        if (result.success) {
            const toucas = result.data;

            // Mapeia as cores das toucas para os IDs dos elementos
            const coresParaIds = {
                azul: "#qt-azul",
                amarela: "#qt-amarela",
                vermelha: "#qt-vermelha",
                verde: "#qt-verde"
            };

            // Atualiza os elementos correspondentes para cada cor
            Object.keys(coresParaIds).forEach(cor => {
                const touca = toucas.find(t => t.cor.toLowerCase() === cor);
                if (touca) {
                    const estoque = touca.estoque;
                    document.querySelectorAll(coresParaIds[cor]).forEach(el => {
                        el.textContent = estoque;
                    });
                } else {
                    console.warn(`Touca ${cor} não encontrada.`);
                }
            });
        } else {
            console.error("Erro ao obter estoque de toucas:", result.error);
        }
    } catch (error) {
        console.error("Erro na conexão com o servidor:", error);
    }
}

//Atualiza o estoque de toucas com o grafico.
async function atualizarDashboard() {
    try {
        // Solicita os estoques de todas as toucas
        const response = await fetch("http://localhost/toucas/cadastro/backend.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "obterEstoqueToucas"
            }),
        });

        const result = await response.json();

        if (result.success) {
            // Mapeia cada touca para o elemento correspondente no DOM
            result.data.forEach(touca => {
                const cor = touca.cor.toLowerCase(); // Exemplo: "azul", "amarela", etc.
                const estoque = touca.estoque;
                const complemento = 100 - estoque;

                // Seleciona os elementos da touca pelo ID correspondente
                const qtElement = document.getElementById(`qt-${cor}`);
                const canvasElement = document.querySelector(`.js-doughnut-chart[data-touca="${cor}"]`);

                // Atualiza os valores de estoque no DOM
                if (qtElement) {
                    qtElement.textContent = estoque;
                }

                // Atualiza o atributo data-set do gráfico
                if (canvasElement) {
                    canvasElement.setAttribute("data-set", `[${estoque}, ${complemento}]`);
                }
            });

            // Se necessário, inicializa ou re-renderiza os gráficos aqui
            inicializarGraficosDoughnut();
        } else {
            console.error("Erro ao obter estoques de toucas:", result.error);
        }
    } catch (error) {
        console.error("Erro na comunicação com o servidor:", error);
    }
}

function inicializarGraficosDoughnut() {
    const doughnutCharts = document.querySelectorAll(".js-doughnut-chart");

    doughnutCharts.forEach(chart => {
        const dataSet = JSON.parse(chart.getAttribute("data-set"));
        const colors = JSON.parse(chart.getAttribute("data-colors"));

        // Configuração e inicialização do gráfico aqui (exemplo com Chart.js)
        new Chart(chart, {
            type: "doughnut",
            data: {
                datasets: [{
                    data: dataSet,
                    backgroundColor: colors,
                }],
            },
            options: {
                cutout: "70%",
                responsive: true,
                plugins: {
                    tooltip: {
                        enabled: false
                    },
                },
            },
        });
    });
}

// contagem de alunos adulto por cor
async function atualizarContagemAlunosPorCor() {
    try {
        const response = await fetch("http://localhost/toucas/cadastro/backend.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "contarAlunosPorCor"
            })
        });

        const result = await response.json();
        if (result.success) {
            const contagem = result.data;

            // Garantir que as quantidades são tratadas como números
            const totalAlunos = Object.values(contagem).reduce((total, quantidade) => {
                return total + Number(quantidade); // Converte para número e soma
            }, 0);

            // Atualizar a contagem total de alunos
            document.querySelector(".h4.text-primary").textContent = totalAlunos;

            // Atualizar a quantidade de alunos por cor
            document.querySelector(".text-info").textContent = contagem["Azul"] || 0;
            document.querySelector(".text-success").textContent = contagem["Verde"] || 0;
            document.querySelector(".text-warning").textContent = contagem["Amarela"] || 0;
            document.querySelector(".text-danger").textContent = contagem["Vermelha"] || 0;
        } else {
            console.error("Erro ao contar alunos por cor:", result.error);
        }
    } catch (error) {
        console.error("Erro ao obter contagem de alunos:", error);
    }
}

// Função para calcular idade a partir da data de nascimento
function calcularIdade(nascimento) {
    const dataNascimento = new Date(nascimento);
    const hoje = new Date();
    let idade = hoje.getFullYear() - dataNascimento.getFullYear(); // Use let aqui
    const m = hoje.getMonth() - dataNascimento.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < dataNascimento.getDate())) {
        idade--; // Agora permitido
    }
    return idade;
}


// Função para atualizar a tabela ultmos  adulto com os alunos do backend
async function atualizarTabela() {
    try {
        // Chamada ao backend para listar alunos
        const response = await fetch('http://localhost/toucas/cadastro/backend.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                action: 'listarAlunosHome'
            }),
        });

        // Converte a resposta para JSON
        const data = await response.json();

        // Verifica se a resposta é bem-sucedida
        if (!data.success) {
            throw new Error('Erro ao carregar os alunos');
        }

        // Recupera os alunos
        const alunos = data.data;

        // Verifica se há alunos retornados
        if (!Array.isArray(alunos) || alunos.length === 0) {
            console.warn('Nenhum aluno encontrado');
            return;
        }

        //	console.log(`Alunos retornados: ${alunos.length}`, alunos); // Log para verificar os alunos recebidos

        // Seleciona o corpo da tabela
        const tabela = document
            .getElementById('tabela-todos-alunos-home')
            .getElementsByTagName('tbody')[0];

        // Limpa a tabela antes de adicionar novos alunos
        tabela.innerHTML = '';

        // Adiciona os alunos na tabela
        alunos.forEach((aluno, index) => {
            //console.log(`Adicionando aluno ${index + 1}:`, aluno); // Log para depuração

            const tr = document.createElement('tr');

            // Nome
            const tdNome = document.createElement('td');
            tdNome.classList.add('align-middle');
            tdNome.innerHTML = `
					<div class="media align-items-center">
						<div>
							<img class="u-avatar rounded-circle mr-3" src="./assets/img/usuarios/user.jpg" alt="Image description">
						</div>
						<div class="media-body">
							<h4 class="mb-0">${aluno.nome}</h4>
						</div>
					</div>
				`;
            tr.appendChild(tdNome);

            // Calcular idade a partir da data de nascimento
            const idade = calcularIdade(aluno.nascimento);
            const tdIdade = document.createElement('td');
            tdIdade.classList.add('align-middle', 'font-weight-semibold');
            tdIdade.textContent = idade;
            tr.appendChild(tdIdade);

            // Touca e cor
            const tdTouca = document.createElement('td');
            tdTouca.classList.add('align-middle');

            const progressBar = document.createElement('div');
            progressBar.classList.add('progress');
            progressBar.style.height = '6px';
            progressBar.style.borderRadius = '3px';

            const progressBarDiv = document.createElement('div');
            progressBarDiv.classList.add('progress-bar');

            // Ajusta a cor da touca
            switch (aluno.touca) {
                case 'Amarela':
                    progressBarDiv.classList.add('bg-warning');
                    break;
                case 'Vermelha':
                    progressBarDiv.classList.add('bg-danger');
                    break;
                case 'Azul':
                    progressBarDiv.classList.add('bg-info');
                    break;
                case 'Verde':
                    progressBarDiv.classList.add('bg-success');
                    break;
                default:
                    progressBarDiv.classList.add('bg-secondary');
                    break;
            }

            progressBarDiv.style.width = '100%';
            progressBar.appendChild(progressBarDiv);
            tdTouca.appendChild(progressBar);
            tr.appendChild(tdTouca);

            // Adiciona a linha na tabela
            tabela.appendChild(tr);
        });
    } catch (error) {
        console.error('Erro ao atualizar a tabela:', error);
    }
}


async function atualizarListaAlunosPorCor() {
    try {
        const response = await fetch('http://localhost/toucas/cadastro/backend.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                action: 'listarAlunosHome'
            }),
        });

        const data = await response.json();

        if (!data.success) {
            throw new Error('Erro ao carregar os alunos');
        }

        const alunos = data.data;

        if (!Array.isArray(alunos) || alunos.length === 0) {
            console.warn('Nenhum aluno encontrado');
            return;
        }

        //console.log(`Alunos retornados: ${alunos.length}`, alunos);

        // Limpa as listas
        const cores = ['azul', 'verde', 'amarela', 'vermelha'];
        cores.forEach(cor => {
            const lista = document.getElementById(`lista-alunos-${cor}`);
            if (lista) lista.innerHTML = '';
        });

        // Adiciona os alunos às listas
        alunos.forEach(aluno => {
            const touca = aluno.touca ? aluno.touca.toLowerCase() : '';
            const listaTouca = document.getElementById(`lista-alunos-${touca}`);

            if (!listaTouca) {
                console.warn(`Lista para touca ${touca} não encontrada.`);
                return;
            }

            const alunoElemento = document.createElement('a');
            alunoElemento.classList.add('list-group-item', 'list-group-item-action');
            alunoElemento.href = "#";
            alunoElemento.innerHTML = `
						<div class="media">
							<div class="media-body">
								<div class="d-md-flex align-items-center">
									<h4 class="mb-1">${aluno.nome}</h4>
								</div>
							</div>
						</div>
					`;

            listaTouca.appendChild(alunoElemento);
        });
    } catch (error) {
        console.error('Erro ao atualizar a tabela:', error);
    }
}
</script>

<?php include 'scripts.html'; ?>