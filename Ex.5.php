<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Exercicio 5</title>
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $numero = intval ($_POST['numero']);
    $antecessor=$numero-1;
    $sucessor=$numero+1;
    echo 'Seu antecessor é: ' . $antecessor . "<br/>";
    echo 'Seu sucessor é: ' . $sucessor . "<br/>";
}
 
?>
<h4 style="text-align: center;">Exercicio 5<h4>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;">
                <tbody>
                    <tr>
                        <td>
                            <label for="numero">Digite um numero:</label>
                        </td>
                        <td>
                            <input name="numero" required="required" step="1" type="number" />
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