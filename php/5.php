<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sorteio:</h1>
    <form action="" method="GET">
            <label for="a">Mínimo:</label>
            <input type="number" id="a" name="a"><br>

            <label for="b">Máximo:</label>
            <input type="number" id="b" name="b"><br>

            <input type="submit" value="Sortear">
    </form>

    <?php 
    function  randomize($a, $b){
        $a = (int)$a;
        $b = (int)$b;
        return rand($a, $b);

        }

        $a = $_GET['a'];
        $b = $_GET['b'];

        echo "<h1>Número sorteado:</h1>";
        echo "<p>".randomize($a, $b)."</p>";

    ?>  

</body>
</html>