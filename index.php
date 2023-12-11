<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OFicina O Marcelo</title>
</head>

<body>
    <h1>Oficina O Marcelo</h1>
    <hr>
    <fieldset>
        <legend>Faça seu orçamento!!!!</legend>
        <form action="processar.php" method="post">
        <table>
            <tr>
                <th>Item</th>
                <th>Quantidade</th>
            </tr>
            <tr>
                <td>Pneu</td>
                <td><input type="number" name="pneu" id="pneu" min="0" value="0"></td>
            </tr>
            <tr>
                <td>Óleo</td>
                <td><input type="number" name="oleo" id="oleo" min="0" value="0" ></td>
            </tr>
            <tr>
                <td>Velas</td>
                <td><input type="number" name="velas" id="velas" min="0" value="0" ></td>
            </tr>
        </table>
        <input type="submit" value="enviar">
    
        </form>
    </fieldset>
</body>

</html>