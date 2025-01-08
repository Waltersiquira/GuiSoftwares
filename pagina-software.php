<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <title>GuiSoftwares</title>
</head>
<body>
    <?php require_once 'includes/lojas.php' ?>
    <?php 
    $id = $_GET['i'] ?? 1;
    $busca = $l->query("select * from softwares where id = '$id'");
    if (!$busca){
        echo 'error';
    } else {
        if ($busca->num_rows == 0){
            echo 'error';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<img src='$reg->imagem' width='400'> <h3>$reg->nome</h3> <h4>R$$reg->preço</h4> <hr> <p>$reg->descrição</p>";
            }
        }
    }
    ?>
    <button style="background-color: blue;"><a href="comprar-software.php" style="text-decoration: none; color: white;">Comprar</a></button>
    <?php $l->close() ?>
</body>
</html>