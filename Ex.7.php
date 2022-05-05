<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Exercicio 7</title>
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $idade = intval ($_POST['idade']);
    $anos = $idade;
    $meses = $idade*12;
    $dias = $idade*365;
    echo 'Sua idade em anos é: ' . $anos .  "<br/>";
    echo 'Sua idade em meses é: ' . $meses . "<br/>";
    echo 'Sua idade em dias é: ' . $dias . "<br/>";
}
 
?>
<h4 style="text-align: center;">Exercicio 7<h4>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;">
                <tbody>
                    <tr>
                        <td>
                            <label for="idade">Insira sua idade:</label>
                        </td>
                        <td>
                            <input name="idade" required="required" step="1" type="number" />
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