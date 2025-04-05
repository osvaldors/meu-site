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
                                <a class="u-sidebar-nav-menu__link" href="./adulto.php">
                                    <span class="u-sidebar-nav-menu__item-icon">A</span>
                                    <span class="u-sidebar-nav-menu__item-title">Adulto</span>
                                </a>
                            </li>
                            <li class="u-sidebar-nav-menu__item">
                                <a class="u-sidebar-nav-menu__link active" href="./infantil.php">
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
            <img src="assets/img/img-infantil.webp" style="width: 90px;">
            <!-- Estoque das toucas Infantil -->
            <h2>INFANTIL | Estoque de toucas</h2>


            <!-- linha 0 estoque infantil-->
            <div class="row">
                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                                <!-- <div id="qt-azul" class="u-doughnut__label text-danger"></div> -->
                                <canvas class="js-doughnut-chart" width="70" height="70" data-set="[,]"
                                    data-colors='[ "#777676","#f6f9fc"]' data-touca="cinza"></canvas>

                                <!-- <div id="qt-azul" class="u-doughnut__label text-info"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca Cinza
                                </h5>
                                <span id="qt-cinza" class="h2 mb-0"></span>
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
                            "#e8e8e8",
                                                "#f6f9fc"
                                            ]' data-touca="branca"></canvas>

                                <!-- <div id="qt-amarela" class="u-doughnut__label text-warning"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca Branca
                                </h5>
                                <span id="qt-branca" class="h2 mb-0"></span>
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
                            "#000",
                                                "#f6f9fc"
                                            ]' data-touca="preta"></canvas>

                                <!-- <div id="qt-verde" class="u-doughnut__label text-success"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca Preta
                                </h5>
                                <span id="qt-preta" class="h2 mb-0"></span>
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
                            "#6c15b6",
                                                "#f6f9fc"
                                            ]' data-touca="lilas"></canvas>

                                <!-- <div id="qt-vermelha" class="u-doughnut__label text-danger"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca LILÁS
                                </h5>
                                <span id="qt-lilas" class="h2 mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- linha 0 estoque infantil-->
            <div class="row">
                <div class="col-sm-6 col-xl-3 mb-4">
                    <div class="card">
                        <div class="card-body media align-items-center px-xl-3">
                            <div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
                                <!-- <div id="qt-azul" class="u-doughnut__label text-danger"></div> -->
                                <canvas class="js-doughnut-chart" width="70" height="70" data-set="[,]"
                                    data-colors='[ "#fda700","#f6f9fc"]' data-touca="laranja"></canvas>

                                <!-- <div id="qt-azul" class="u-doughnut__label text-info"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca Laranja
                                </h5>
                                <span id="qt-laranja" class="h2 mb-0"></span>
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
                            "#60533a",
                                                "#f6f9fc"
                                            ]' data-touca="marrom"></canvas>

                                <!-- <div id="qt-amarela" class="u-doughnut__label text-warning"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca MARROM
                                </h5>
                                <span id="qt-marrom" class="h2 mb-0"></span>
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
                            "#d84287",
                                                "#f6f9fc"
                                            ]' data-touca="rosa"></canvas>

                                <!-- <div id="qt-verde" class="u-doughnut__label text-success"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca Rosa
                                </h5>
                                <span id="qt-rosa" class="h2 mb-0"></span>
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
                            "#686667",
                                                "#f6f9fc"
                                            ]' data-touca="prata"></canvas>

                                <!-- <div id="qt-vermelha" class="u-doughnut__label text-danger"></div> -->
                            </div>

                            <div class="media-body">
                                <h5 class="h6 text-muted text-uppercase mb-2">
                                    Touca Prata
                                </h5>
                                <span id="qt-prata" class="h2 mb-0"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- fim visão geral estoque das toucas infantil -->

            <div class="row">
                <!-- últimos alunos cadastrados -->
                <div class="col-md-12 mb-4 mb-md-0">
                    <div class="card h-100">
                        <header class="card-header d-flex align-items-center">
                            <h2 class="h3 card-header-title"> Infantil | Últimos Alunos cadastrados</h2>


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
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Cinza</span>
                                    <span class="h4 text-cinza"> </span>
                                </div>

                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">
                                        Branca</span>
                                    <span class="h4 text-branca"> </span>
                                </div>


                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Preta</span>
                                    <span class="h4 text-preta"> </span>
                                </div>

                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Lilas</span>
                                    <span class="h4 text-lilas"> </span>
                                </div>


                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Laranja</span>
                                    <span class="h4 text-laranja"> </span>
                                </div>

                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Marrom</span>
                                    <span class="h4 text-marrom"> </span>
                                </div>

                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Rosa</span>
                                    <span class="h4 text-rosa"> </span>
                                </div>

                                <div class="divider divider-vertical mx-2"></div>

                                <div>
                                    <span class="d-lg-block text-muted small text-uppercase mb-1">Prata</span>
                                    <span class="h4 text-prata"> </span>
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
                                                            src="./assets/img/img-infantil.webp" alt="Infantil">
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
            </div>
            <br>
            <div class="row">
                <!-- Alunos por toucas -->
                <div class="col-md-3">
                    <!--Lista de alunos intantil cinza-->
                    <div class="card">
                        <header style="background: #777676;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">CINZA</h2>
                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-cinza" class="list-group list-lg-group list-group-flush">
                                <!-- Aqui os alunos com touca cinza serão adicionados dinamicamente -->
                            </div>

                        </div>

                    </div>
                    <br>
                    <!-- lista de alunos infantil laranja -->
                    <div class="card">
                        <header style="background: #fda700;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">LARANJA</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-laranja" class="list-group"></div>

                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <!--Lista de alunos infantil branca-->
                    <div class="card">
                        <header style="background: #cdcdcd;color: #606060;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">BRANCA</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-branca" class="list-group"></div>

                        </div>

                    </div>
                    <br>
                    <!--Lista de alunos infantil marrom-->
                    <div class="card">
                        <header style="background: #605339;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">MARROM</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-marrom" class="list-group"></div>

                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <!--Lista de alunos adulto verde-->
                    <div class="card">
                        <header style="background: #000000;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">PRETA</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-preta" class="list-group"></div>

                        </div>

                    </div>
                    <br>
                    <!--Lista de alunos adulto vermelha-->
                    <div class="card">
                        <header style="background: #db33bf;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">ROSA</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-rosa" class="list-group"></div>

                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <!--Lista de alunos infantil lilas -->
                    <div class="card">
                        <header style="background: #860679;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">LILÁS</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-lilas" class="list-group"></div>

                        </div>

                    </div>
                    <br>
                    <!--Lista de alunos infantil prata-->
                    <div class="card">
                        <header style="background: #7b7b7b;color: #fff;"
                            class="card-header d-md-flex align-items-center">
                            <h2 class="h3 card-header-title">PRATA</h2>

                        </header>

                        <div class="card-body p-0 m-0" style="overflow: overlay;height: 250px;">

                            <div id="lista-alunos-prata" class="list-group"></div>

                        </div>

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
    atualizarEstoqueToucasInfantil();
    atualizarDashboardInfantil();
    atualizarContagemAlunosPorCorInfantil();
    atualizarTabelaInfantil();
    atualizarListaAlunosPorCorInfantil();
});

async function atualizarEstoqueToucasInfantil() {
    try {
        const response = await fetch("http://localhost/toucas/cadastro/backend.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "obterEstoqueToucasInfantil"
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
async function atualizarDashboardInfantil() {
    try {
        // Solicita os estoques de todas as toucas
        const response = await fetch("http://localhost/toucas/cadastro/backend.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "obterEstoqueToucasInfantil"
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
                const canvasElementInfantil = document.querySelector(
                    `.js-doughnut-chart[data-touca="${cor}"]`);

                // Atualiza os valores de estoque no DOM
                if (qtElement) {
                    qtElement.textContent = estoque;
                }

                // Atualiza o atributo data-set do gráfico
                if (canvasElementInfantil) {
                    canvasElementInfantil.setAttribute("data-set", `[${estoque}, ${complemento}]`);
                }
            });

            // Se necessário, inicializa ou re-renderiza os gráficos aqui
            inicializarGraficosDoughnutInfantil();
        } else {
            console.error("Erro ao obter estoques de toucas:", result.error);
        }
    } catch (error) {
        console.error("Erro na comunicação com o servidor:", error);
    }
}

function inicializarGraficosDoughnutInfantil() {
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
async function atualizarContagemAlunosPorCorInfantil() {
    try {
        const response = await fetch("http://localhost/toucas/cadastro/backend.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({
                action: "contarAlunosPorCorInfantil"
            })
        });

        const result = await response.json();
        if (result.success) {
            const contagem = result.data;

            // Garantir que as quantidades são tratadas como números
            const totalAlunosInfantil = Object.values(contagem).reduce((total, quantidade) => {
                return total + Number(quantidade); // Converte para número e soma
            }, 0);

            // Atualizar a contagem total de alunos
            document.querySelector(".h4.text-primary").textContent = totalAlunosInfantil;

            // Atualizar a quantidade de alunos por cor
            document.querySelector(".text-cinza").textContent = contagem["Cinza"] || 0;
            document.querySelector(".text-branca").textContent = contagem["Branca"] || 0;
            document.querySelector(".text-preta").textContent = contagem["Preta"] || 0;
            document.querySelector(".text-lilas").textContent = contagem["Lilas"] || 0;

            document.querySelector(".text-laranja").textContent = contagem["Laranja"] || 0;
            document.querySelector(".text-marrom").textContent = contagem["Marrom"] || 0;
            document.querySelector(".text-rosa").textContent = contagem["Rosa"] || 0;
            document.querySelector(".text-prata").textContent = contagem["Prata"] || 0;
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
        idade--;
    }
    return idade;
}

// Calcular idade a partir da data de nascimento
//let idade = calcularIdade(aluno.nascimento); // Use let aqui também

// Se você precisar atualizar a idade em algum momento, você pode fazer isso
//idade = novaIdade; // Isso agora funcionará sem erro

// Função para atualizar a tabela ultmos  adulto com os alunos do backend
async function atualizarTabelaInfantil() {
    try {
        // Chamada ao backend para listar alunos
        const response = await fetch('http://localhost/toucas/cadastro/backend.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                action: 'listarAlunosHomeInfantil'
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

        console.log(`Alunos retornados: ${alunos.length}`, alunos); // Log para verificar os alunos recebidos

        // Seleciona o corpo da tabela
        const tabela = document
            .getElementById('tabela-todos-alunos-home')
            .getElementsByTagName('tbody')[0];

        // Limpa a tabela antes de adicionar novos alunos
        tabela.innerHTML = '';

        // Adiciona os alunos na tabela
        alunos.forEach((aluno, index) => {
            // console.log(`Adicionando aluno ${index + 1}:`, aluno); // Log para depuração

            const tr = document.createElement('tr');

            // Nome
            const tdNome = document.createElement('td');
            tdNome.classList.add('align-middle');
            tdNome.innerHTML = `
					<div class="media align-items-center">
						<div>
							<img class="u-avatar rounded-circle mr-3" src="./assets/img/img-infantil.webp" alt="Aluno">
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
                case 'Cinza':
                    progressBarDiv.classList.add('bg-cinza');
                    break;
                case 'Branca':
                    progressBarDiv.classList.add('bg-branca');
                    break;
                case 'Preta':
                    progressBarDiv.classList.add('bg-preta');
                    break;
                case 'Lilas':
                    progressBarDiv.classList.add('bg-lilas');
                    break;
                case 'Laranja':
                    progressBarDiv.classList.add('bg-laranja');
                    break;
                case 'Marrom':
                    progressBarDiv.classList.add('bg-marrom');
                    break;
                case 'Rosa':
                    progressBarDiv.classList.add('bg-rosa');
                    break;
                case 'Prata':
                    progressBarDiv.classList.add('bg-prata');
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


async function atualizarListaAlunosPorCorInfantil() {
    try {
        const response = await fetch('http://localhost/toucas/cadastro/backend.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                action: 'listarAlunosHomeInfantil'
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

        // console.log(`Alunos retornados: ${alunos.length}`, alunos);

        // Limpa as listas
        const cores = ['prata', 'cinza', 'branca', 'preta', 'lilas', 'laranja', 'marrom', 'rosa'];
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