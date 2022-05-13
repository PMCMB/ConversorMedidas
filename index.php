<?php

//Celsius to Fahrenheit ° F = 9/5 ( ° C) + 32
//Fahrenheit to Celsius ° C = 5/9 (° F - 32)

$valor_temp=0.0;
$mostrar = false;

//Fahrenheit to celsius
function fahrenheit_to_celsius($given_value)
{
    $celsius=5/9*($given_value-32);
    return $celsius ;
}
//Celsius to fahrenheit
function celsius_to_fahrenheit($given_value)
{
    $fahrenheit=$given_value*9/5+32;
    return $fahrenheit ;
}
?>

<!doctype html>
<html lang="en">
<head>

    <style>
        body {
            background-color: #E6E6FA;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Conversor de Temperatura</title>

    <h1 style="text-align:center;color:white;background-color:DodgerBlue;
        border:2px solid gray;">Conversor de Temperatura</h1>
</head>
<body>

<form action="" method="post">
    <table>
        <tr>
            <td>
                <input type="text" name="valor_temp">
            </td>
        </tr>
        <tr>
            <td> <br>
                <select name="tipo_temp_nome">
                    <option value="fahrenheit">Fahrenheit</option>
                    <option value="celsius">Celsius</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> <br>
                <input type="submit" name="btn" value="Converter">
            </td>
        </tr>
        <tr>
            <td><br><hr/>
                <h3>
                    <?php

                    if(isset($_POST['btn']))
                    {
                        $tipo_temp_nome=$_POST['tipo_temp_nome'];
                        $valor_temp=$_POST['valor_temp'];

                        if (empty($valor_temp)) {
                            echo 'Atenção!!! Campo vazio, tem de preencher com um número!';
                        }else{
                            $mostrar = true;
                        }
                        if($mostrar) {
                            //Fahrenheit to celsius
                            if ($tipo_temp_nome=='fahrenheit') {
                                $celsius=fahrenheit_to_celsius($valor_temp);
                                echo "$valor_temp Fahrenheit = $celsius Celsius";
                            }
                            //Kelvin to fahrenheit
                            else{
                                $fahrenheit=celsius_to_fahrenheit($valor_temp);
                                echo "$valor_temp Celsius  = $fahrenheit Fahrenheit";
                            }
                        }
                    }
                    ?>
                </h3>
                <hr/>
            </td>
        </tr>
    </table>

</form>
</body>
</html>
