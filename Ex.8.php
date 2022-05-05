<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Exercicio 8</title>
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $fahrenheit = intval ($_POST['fahrenheit']);
    $celsius = ($fahrenheit-32)/1.8;
    echo 'A temperatura em Celsius é: ' . $celsius .  "<br/>";
}
 
?>
<h4 style="text-align: center;">Exercicio 8<h4>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;">
                <tbody>
                    <tr>
                        <td>
                            <label for="fahrenheit">Insira a temperatura em fahrenheit:</label>
                        </td>
                        <td>
                            <input name="fahrenheit" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="1">
                            <input value="Converter" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>