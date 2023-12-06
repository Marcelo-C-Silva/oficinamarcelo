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
        $pneu = $_POST['pneu'];
        $oleo = $_POST['oleo'];
        $vela = $_POST['vela'];
        setlocale(LC_ALL, "pt-BR");

        echo $pneu .'pneus <br>';
        echo $oleo .'óleo <br>';
        echo $vela .'vela <br>';
        echo '<p>Pedido processado em: ';
        echo strftime("%d de %B de %G as %H:%M");
        '</p>';
        ?>
    </fieldset>
</body>

</html>