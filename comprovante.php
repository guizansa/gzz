<<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    function calcular_total($quantidade, $preco) {
        return $quantidade * $preco;
    }

    $total = 0;

    $lanches = isset($_POST['lanches']) ? $_POST['lanches'] : [];
    $quantidades_lanches = [
        'X-Murilo' => $_POST['quantidade_x_murilo'] ?? 0,
        'Silveira Quente' => $_POST['quantidade_silveira_quente'] ?? 0,
        'Brisola e Igor salada' => $_POST['quantidade_brisola_igor'] ?? 0
    ];
    $precos_lanches = [
        'X-Murilo' => 8.30,
        'Silveira Quente' => 7.00,
        'Brisola e Igor salada' => 8.90
    ];

    foreach ($lanches as $lanche) {
        $quantidade = $quantidades_lanches[$lanche];
        $preco = $precos_lanches[$lanche];
        $total += calcular_total($quantidade, $preco);
        echo "Lanche: $lanche - Quantidade: $quantidade - Preço: R$ $preco<br>";
    }

    $bebidas = isset($_POST['bebidas']) ? $_POST['bebidas'] : [];
    $quantidades_bebidas = [
        'Suco de Laranja' => $_POST['quantidade_suco_laranja'] ?? 0,
        'Coca' => $_POST['quantidade_coca'] ?? 0,
        'Água' => $_POST['quantidade_agua'] ?? 0
    ];
    $precos_bebidas = [
        'Suco de Laranja' => 7.00,
        'Coca' => 5.00,
        'Água' => 2.90
    ];

    foreach ($bebidas as $bebida) {
        $quantidade = $quantidades_bebidas[$bebida];
        $preco = $precos_bebidas[$bebida];
        $total += calcular_total($quantidade, $preco);
        echo "Bebida: $bebida - Quantidade: $quantidade - Preço: R$ $preco<br>";
    }

    $porcoes = isset($_POST['porcoes']) ? $_POST['porcoes'] : [];
    $quantidades_porcoes = [
        'Batata Frita' => $_POST['quantidade_batata_frita'] ?? 0,
        'Iscas de Frango' => $_POST['quantidade_iscas_frango'] ?? 0,
        'Tilápia' => $_POST['quantidade_tilapia'] ?? 0
    ];
    $precos_porcoes = [
        'Batata Frita' => 20.00,
        'Iscas de Frango' => 23.00,
        'Tilápia' => 23.00
    ];

    foreach ($porcoes as $porcao) {
        $quantidade = $quantidades_porcoes[$porcao];
        $preco = $precos_porcoes[$porcao];
        $total += calcular_total($quantidade, $preco);
        echo "Porção: $porcao - Quantidade: $quantidade - Preço: R$ $preco<br>";
    }

    $doces = isset($_POST['doces']) ? $_POST['doces'] : [];
    $quantidades_doces = [
        'Bala de Cocô' => $_POST['quantidade_bala_coco'] ?? 0,
        'Sorvete' => $_POST['quantidade_sorvete'] ?? 0,
        'Açaí' => $_POST['quantidade_acai'] ?? 0
    ];
    $precos_doces = [
        'Bala de Cocô' => 4.00,
        'Sorvete' => 6.00,
        'Açaí' => 14.90
    ];

    foreach ($doces as $doce) {
        $quantidade = $quantidades_doces[$doce];
        $preco = $precos_doces[$doce];
        $total += calcular_total($quantidade, $preco);
        echo "Doce: $doce - Quantidade: $quantidade - Preço: R$ $preco<br>";
    }

    echo "<br><strong>Total do pedido: R$ " . number_format($total, 2, ',', '.') . "</strong>";
} else {
    echo "Nenhum pedido foi recebido.";
}
?>