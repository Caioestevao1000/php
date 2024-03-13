<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Função</title>
</head>
<body>

    <h1>Verificação de Número - Par ou Impar</h1>

    <form method="post">
        <label for="num">Número:</label>
        <input type="number" step="0.01" name="num" />
        <input type="submit" name="submit" value="Calcular" />
    </form>

    <?php
         
        $num = $_POST["num"];

        if($num % 2 == 0){
            echo "O número informado é PAR";
            echo "<br>DIGITE UM NOVO NÚMERO!";
        }else{
            echo "O número informado é IMPAR";
            echo "<br>DIGITE UM NOVO NÚMERO!";
        }

    ?>
</body>
</html>