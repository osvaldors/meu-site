<?php require 'autentica.php'; // Ou use include; ?>

<?php include 'header.html'; ?>

<main class="u-main" role="main">
    <!-- Sidebar -->
    <aside id="sidebar" class="u-sidebar">
        <div class="u-sidebar-inner">
            <header class="u-sidebar-header">
                <a class="u-sidebar-logo" href="adulto.html">
                    <img class="img-fluid" src="./assets/img/logo-agitacao.webp" width="124" alt="Agitação Esportes">
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
                        <a class="u-sidebar-nav-menu__link active" href="./toucas.php">
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
    <!-- End Sidebar -->

    <div class="u-content">

        <div class="u-body">
            <h1 class="h2 font-weight-semibold mb-4">Gestão das Toucas</h1>

            <!-- Botão para abrir a interface de atualização de estoque -->
            <button id="atualizar-estoque-toucas" type="button" class="btn btn-soft-danger">Cadastrar nova
                quantidade de toucas</button>
            <br>
            <!-- Formulário para atualizar o estoque -->
            <div class="form-group" id="estoque-form" style="display: none;">
                <h3>Atualizar Estoque de Touca</h3>
                <label for="toucaCor">Selecione a cor da touca:</label>
                <select class="form-control" id="toucaCor">
                    <option value="">Escolha uma cor</option>
                </select>

                <br>

                <label for="quantidadeEstoque">Quantidade de estoque:</label>
                <input class="form-control" type="number" id="quantidadeEstoque" placeholder="Digite a quantidade">

                <br>

                <button id="salvarEstoque" class="btn btn-primary" type="button">Salvar</button>
            </div>

            <br>



            <div class="card mb-4">
                <header class="card-header">
                    <h2 class="h3 card-header-title">Estoque das toucas </h2>
                </header>

                <div class="row card-body">
                    <div>
                        <label for="filtroCategoria">Filtrar por Categoria:</label>
                        <select style="width: max-content;background: #65afff;color: #000000;border: 0;"
                            class="form-control form-control-sm" id="filtroCategoria">
                            <option value="todas">Todas</option>
                            <option value="Adulto">Adulto</option>
                            <option value="Infantil">Infantil</option>
                        </select>
                        <br>
                    </div>
                    <div id="cards-container" class="row">
                        <!-- Os cards serão inseridos aqui dinamicamente -->
                    </div>





                </div>
            </div>
        </div>



    </div>
</main>



<script>
// Função para carregar toucas e aplicar filtro
async function carregarToucasComFiltro() {
    try {
        const response = await fetch('http://localhost/toucas/cadastro/estoque-toucas.php');
        const toucas = await response.json();

        // Obter o valor do filtro selecionado
        const filtroCategoria = document.getElementById("filtroCategoria").value;

        // Atualizar os cards com base no filtro
        atualizarCardsToucas(toucas, filtroCategoria);
    } catch (error) {
        console.error("Erro ao carregar as toucas:", error);
    }
}

// Função para atualizar os cards com base no filtro
function atualizarCardsToucas(toucas, filtroCategoria) {
    const container = document.getElementById("cards-container");
    container.innerHTML = ''; // Limpar os cards

    toucas.forEach(touca => {
        // Filtrar pela categoria_touca
        if (filtroCategoria !== 'todas' && touca.categoria_touca !== filtroCategoria) return;

        // Criar o HTML do card
        const cardHTML = `
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="${touca.imagem}" alt="Imagem da touca">
                        <div class="card-body">
                            <h5 class="h3 card-title touca-nome">${touca.cor}</h5>
                            <p class="card-text">${touca.descricao}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Estoque disponível: <span class="estoque-disponivel">${touca.estoque}</span>
                            </li>
                        </ul>
                    </div>
                </div>`;
        container.insertAdjacentHTML("beforeend", cardHTML);
    });

    // Mostrar mensagem se nenhum resultado foi encontrado
    if (container.innerHTML === '') {
        container.innerHTML = '<p class="text-center">Nenhuma touca encontrada nesta categoria.</p>';
    }
}

// Evento para recarregar toucas ao mudar o filtro
document.getElementById("filtroCategoria").addEventListener("change", carregarToucasComFiltro);

// Carregar as toucas ao carregar a página
document.addEventListener("DOMContentLoaded", carregarToucasComFiltro);














// Função para carregar as toucas no select e verificar estoque baixo
async function carregarToucas() {
    try {
        const response = await fetch('http://localhost/toucas/cadastro/estoque-toucas.php');
        const toucas = await response.json();

        const selectTouca = document.getElementById("toucaCor");

        // Limpar as opções existentes no select antes de adicionar novas
        selectTouca.innerHTML =
            '<option value="">Escolha uma cor</option>'; // Reseta as opções, preservando a opção padrão

        // Verificar se há toucas com estoque abaixo de 5
        let estoqueBaixo = [];
        toucas.forEach(touca => {
            if (touca.estoque < 5) {
                estoqueBaixo.push(`${touca.cor} (${touca.estoque} restantes)`);
            }

            // Adicionar as toucas no select
            const option = document.createElement("option");
            option.value = touca.cor;
            option.textContent = touca.cor; // A cor será exibida como nome da opção
            selectTouca.appendChild(option);
        });

        // Mostrar alerta se houver toucas com estoque baixo
        if (estoqueBaixo.length > 0) {
            alert(`Atenção! Estoque baixo para as seguintes toucas: ${estoqueBaixo.join(", ")}`);
        }
    } catch (error) {
        console.error("Erro ao carregar as toucas:", error);
    }
}

// Evento para carregar toucas e verificar estoque baixo ao carregar a página
document.addEventListener("DOMContentLoaded", function() {
    // Carregar as toucas e verificar estoques baixos
    carregarToucas();
});

// Evento de clique do botão para abrir a interface de atualização de estoque
document.getElementById("atualizar-estoque-toucas").addEventListener("click", function() {
    // Exibir os campos para escolher a cor e a quantidade
    document.getElementById("estoque-form").style.display = "block";
    carregarToucas(); // Carregar as toucas ao abrir o formulário
});

// Função para atualizar o estoque de uma touca
document.getElementById("salvarEstoque").addEventListener("click", async function() {
    const corTouca = document.getElementById("toucaCor").value;
    const novoEstoque = document.getElementById("quantidadeEstoque").value;

    if (!corTouca || novoEstoque === "") {
        alert("Por favor, selecione uma cor e insira a quantidade de estoque.");
        return;
    }

    try {
        const response = await fetch('http://localhost/toucas/cadastro/atualizar-estoque.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: new URLSearchParams({
                cor: corTouca,
                estoque: novoEstoque
            })
        });

        const result = await response.json();

        if (result.status === 'success') {
            alert(result.message);

            // Atualiza o estoque na interface do usuário
            // Atualize a linha na tabela de toucas
            atualizarEstoqueNaInterface(corTouca, novoEstoque);

            // Recarregar a página para atualizar os dados de estoque
            location.reload(); // Esta linha recarrega a página
        } else {
            alert("Erro: " + result.message);
        }
    } catch (error) {
        console.error("Erro ao atualizar o estoque:", error);
        alert("Erro ao atualizar o estoque.");
    }
});

// Função para atualizar o estoque na interface (campo de estoque)
function atualizarEstoqueNaInterface(corTouca, novoEstoque) {
    const toucasRows = document.querySelectorAll('.touca-row'); // Supondo que você tenha linhas com essa classe
    toucasRows.forEach(row => {
        const toucaCor = row.querySelector('.touca-cor'); // Elemento que mostra a cor
        if (toucaCor.textContent === corTouca) {
            const estoqueElement = row.querySelector('.estoque-disponivel');
            estoqueElement.textContent = `Estoque disponível: ${novoEstoque}`;
        }
    });
}
</script>





<?php include 'scripts.html'; ?>