<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficina O Marcelo</title>
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
        $pneu = $_POST['pneu'];
        $oleo = $_POST['oleo'];
        $velas = $_POST['velas'];

        echo $pneu .' pneus. <br>';
        echo $oleo .' óleo. <br>';
        echo $velas .' vela. <br>';
        
        $valortotal = $pneu*PRECOPNEU + $oleo*PRECOOLEO + $velas*PRECOVELAS;

        $qtdtotal = $pneu + $oleo + $velas;
        $taxa = 0.22;
        $valortotal= $valortotal * (1 + $taxa);
        echo 'A quantidade total é: ' .$qtdtotal.'. <br>';
        echo ('O valor total é: ' . number_format($valortotal ,2,",",".")  .'.');
        echo '<hr>';
        echo '<p>Pedido processado em: ';
        echo strftime("%d de %B de %G as %H:%M").'.';
        '</p>';

        ?>
    </fieldset>
</body>

</html>