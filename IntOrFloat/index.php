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
        $numero = $_POST["num"];

        if ($numero % 10 == 0){
            echo "Número redondo";
        }
        else{
            echo "Número não redondo";
        }
    ?>
    
</body>
</html>