<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Exercicio 6</title>
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $numero1 = intval ($_POST['numero1']);
    $numero2 = intval ($_POST['numero2']);
    $quociente=$numero1/$numero2;
    $resto=$numero1 % $numero2;
    echo 'O quociente da divisão é: ' . $quociente . "<br/>";
    echo 'O resto da divisão é: ' . $resto . "<br/>";
}
 
?>
<h4 style="text-align: center;">Exercicio 6<h4>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;">
                <tbody>
                    <tr>
                        <td>
                            <label for="numero1">Digite o primeiro numero:</label>
                        </td>
                        <td>
                            <input name="numero1" required="required" step="1" type="number" />
                        </td>
                        <td>
                            <label for="numero2">Digite o segundo numero:</label>
                        </td>
                        <td>
                            <input name="numero2" required="required" step="1" type="number" />
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