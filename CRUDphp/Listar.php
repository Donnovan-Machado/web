<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse; 
        }
        th, td {
            border: 1px solid black; 
            text-align: center; 
            padding: 10px; 
        }
        th {
            background-color: #f2f2f2; 
        }
        td {
            height: 50px; 
        }
    </style>
</head>
<body>
<?php
    include_once("Database.php");
    include_once("PessoaDAO");
    $listaPessoa = getUsuarios();
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        for($i=0; $i <count($listaPessoa); $i++){
            ?>
            <tr>
                <td><a href="editPessoa.php?pessoa_id=<?php echo $listaPessoa[$i]["idusuario"] ?>"><?php echo $listaPessoa[$i]["idusuario"]?></a></td>
                <td><?php echo $listaPessoa[$i]["nome"] ?></td>
                <td><?php echo $listaPessoa[$i]["email"] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

</body>
</html>
