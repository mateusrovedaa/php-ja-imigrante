<?php
require_once('./Models/Pen.php');
require_once('./Controllers/PenController.php');

// $redPen = new Pen('red', 'big', '0.5');
// $greenPen = new Pen('green', 'small', '0.75', 'pen');

// // array_push($arrayPens, $redPen);
// $arrayPens[] = $redPen;
// $arrayPens[] = $greenPen;
// var_dump($arrayPens);

$pensController = new PenController();

do {
    echo "
    [1] Cadastrar uma caneta\n
    [2] Listar todas as canetas\n
    [3] Sair do sistema\n";
    echo "\n";
    $opcao = readline("Escolha uma opção: ");

    if ($opcao == 1) {
        $cor = readline("Digite a cor da caneta: ");
        $tamanho = readline("Digite o tamanho da caneta: ");
        $espessura = readline("Digite a espessura da caneta: ");
        $tipo = readline("Digite o tipo da caneta: ");
        
        $pen = new Pen($cor, $tamanho, $espessura, $tipo);
        $pensController->save($pen);
    } else if ($opcao == 2) {
        $pensController->list();
    }
} while ($opcao != 3);
