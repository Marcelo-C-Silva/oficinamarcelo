<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Oficina O Marcelo - Pedidos</title>
</head>

<body>
    <h1>Oficina O Marcelo</h1>
    <h2>Pedidos</h2>
    <hr>
    <fieldset>
        <legend>Seus Pedidos!!!</legend>
        <?php
        setlocale(LC_ALL, "pt-BR");
        $valortotal = 0.00;
        $qtdtotal = 0;
        define('PRECOPNEU', 100);
        define('PRECOOLEO', 10);
        define('PRECOVELAS', 4);
        $pneu = isset($_POST['pneu']) ? $_POST['pneu'] : 0;
        $oleo = isset($_POST['oleo']) ? $_POST['oleo'] : 0;
        $velas = isset($_POST['velas']) ? $_POST['velas'] : 0;

        $qtdtotal = $pneu + $oleo + $velas;
        if ($qtdtotal == 0 ) {
            echo 'Você não pediu nada na página anterior. <br>';
        } else {
            echo $pneu . ' pneu. <br>';
            echo $oleo . ' óleo. <br>';
            echo $velas . ' vela. <br>';
        }

        $valortotal = $pneu * PRECOPNEU + $oleo * PRECOOLEO + $velas * PRECOVELAS;

        echo 'A quantidade total é: ' . $qtdtotal . '. <br>';
        echo 'O subtotal total é de R$ ' . number_format($valortotal, 2, ",", ".") . '. <br>';
        $taxa = 0.22;
        if (is_numeric($valortotal)) {
            $valortotal = $valortotal * (1 + $taxa);
            echo 'O valor total é de R$ ' . number_format($valortotal, 2, ',', '.') . '.';
        } else {
            echo 'Não foi possível calcular o valor total.';
        }
        echo '<hr>';
        echo '<p>Pedido processado em: ';
        echo strftime("%d de %B de %G as %H:%M") . '.';
        '</p>';

        ?>
    </fieldset>
</body>

</html>
