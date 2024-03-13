<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Função</title>
</head>
<body>

    <h1>Verificação de Número + - 0</h1>

    <form method="post">
        <label for="num">Número:</label>
        <input type="number" step="0.01" name="num" />
        <input type="submit" name="submit" value="Calcular" />
    </form>

    <?php
         
        $num = $_POST["num"];

        if($num > 0 ){
            echo "O número informado é Positivo";
        }if($num < 0){
            echo "O número informado é Negativo";
        }if($num == 0){
            echo "O número é Neutro";
        }
    ?>
    
</body>
</html>