<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Exercicio 2</title>
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $lado = intval ($_POST['lado']);
    $area=$lado * $lado;
    $perimetro=4*$lado;
    echo 'A area do qudrado é: ' . $area . "<br/>";
    echo 'O perimetro do quadrado é: ' . $perimetro . "<br/>";
}
 
?>
<h4 style="text-align: center;">Exercicio 2<h4>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;">
                <tbody>
                    <tr>
                        <td>
                            <label for="lado">Insira o lado:</label>
                        </td>
                        <td>
                            <input name="lado" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="1">
                            <input value="Resultado" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>