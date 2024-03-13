<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Função</title>
</head>
<body>

    <h1>Inteiro ou Float</h1>

    <form method="post">
        <label for="num">Número:</label>
        <input type="number" step="0.001" name="num" />
        <input type="submit" name="submit" value="Calcular" />
    </form>

    <?php
         
        $num = $_POST["num"];

        if(is_int($num)){
            echo "O número informado é inteiro";
        }elseif(is_float($num)){
            echo "O número informado é quebrado";
        }
    ?>
    
</body>
</html>