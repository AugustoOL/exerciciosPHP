<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Exercicio 1</title>
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $base = intval ($_POST['base']);
    $altura = intval ($_POST['altura']);
    $area=$base * $altura;
    $perimetro=2*$base + 2*$altura;
    echo 'A area do retangulo é: ' . $area . "<br/>";
    echo 'O perimetro do retangulo é: ' . $perimetro . "<br/>";
}
 
?>
<h4 style="text-align: center;">Exercicio 1<h4>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;">
                <tbody>
                    <tr>
                        <td>
                            <label for="base">Digite a base:</label>
                        </td>
                        <td>
                            <input name="base" required="required" step="1" type="number" />
                        </td>
</tr>
                        <tr>
                        <td>
                            <label for="altura">Digite a altura:</label>
                        </td>
                        <td>
                            <input name="altura" required="required" step="1" type="number" />
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