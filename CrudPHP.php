
<?php

$produtos = [];
$proximoId = 1;

// CREATE
function cadastrarProduto() {
    global $produtos, $proximoId;

    echo "\n=== CADASTRAR PRODUTO ===\n";

    $nome = readline("Nome: ");
    $preco = (float) readline("Preço: ");

    $produtos[] = [
        "id" => $proximoId,
        "nome" => $nome,
        "preco" => $preco
    ];

    $proximoId++;

    echo "\nProduto cadastrado com sucesso!\n";
}

// READ
function listarProdutos() {
    global $produtos;

    echo "\n=== LISTA DE PRODUTOS ===\n";

    if (empty($produtos)) {
        echo "Nenhum produto cadastrado.\n";
        return;
    }

    foreach ($produtos as $produto) {
        echo "\nID: " . $produto["id"];
        echo "\nNome: " . $produto["nome"];
        echo "\nPreço: R$ " . number_format($produto["preco"], 2, ',', '.');
        echo "\n------------------------\n";
    }
}

// UPDATE
function atualizarProduto() {
    global $produtos;

    echo "\n=== ATUALIZAR PRODUTO ===\n";

    $id = (int) readline("Digite o ID do produto: ");

    foreach ($produtos as &$produto) {

        if ($produto["id"] === $id) {

            $produto["nome"] = readline("Novo nome: ");
            $produto["preco"] = (float) readline("Novo preço: ");

            unset($produto);

            echo "\nProduto atualizado com sucesso!\n";
            return;
        }
    }

    unset($produto);

    echo "\nProduto não encontrado.\n";
}

// DELETE
function excluirProduto() {
    global $produtos;

    echo "\n=== EXCLUIR PRODUTO ===\n";

    $id = (int) readline("Digite o ID do produto: ");

    foreach ($produtos as $indice => $produto) {

        if ($produto["id"] === $id) {

            unset($produtos[$indice]);

            echo "\nProduto excluído com sucesso!\n";
            return;
        }
    }

    echo "\nProduto não encontrado.\n";
}

// MENU PRINCIPAL
do {

    echo "\n========== MENU PRINCIPAL ==========\n";
    echo "1 - Cadastrar produto\n";
    echo "2 - Listar produtos\n";
    echo "3 - Atualizar produto\n";
    echo "4 - Excluir produto\n";
    echo "0 - Sair\n";
    echo "==============================\n";

    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {

        case 1:
            cadastrarProduto();
            break;

        case 2:
            listarProdutos();
            break;

        case 3:
            atualizarProduto();
            break;

        case 4:
            excluirProduto();
            break;

        case 0:
            echo "\nSaindo...\n";
            break;

        default:
            echo "\nOpção inválida!\n";
    }

} while ($opcao !== 0);
