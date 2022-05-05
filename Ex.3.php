<!DOCTYPE html>
<html lang="pt-br">
<head>
        <title>Exercicio 3</title>
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $raio = intval ($_POST['raio']);
    $area= 3.14 * $raio^2;
    $perimetro=2*3.14*$raio;
    echo 'A area da circuferencia é: ' . $area . "<br/>";
    echo 'O perimetro da circuferencia é ' . $perimetro . "<br/>";
}
 
?>
<h4 style="text-align: center;">Exercicio 3<h4>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;">
                <tbody>
                    <tr>
                        <td>
                            <label for="raio">Insira o raio:</label>
                        </td>
                        <td>
                            <input name="raio" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="1">
                            <input value="Calcular" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>