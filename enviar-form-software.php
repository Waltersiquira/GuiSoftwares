<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <title>GuiSoftwares</title>
</head>
<body>
    <?php 
    require_once 'includes/lojas.php';
    $nn = $_GET['nome'] ?? '';
    $dd = $_GET['descricao'] ?? '';
    $p = $_GET['preco'] ?? '';
    $i = $_GET['imagem'] ?? '';
    $n = $l->real_escape_string($nn);
    $d = $l->real_escape_string($dd);
    if (!empty($n) and !empty($d) and !empty($p) and !empty($i)){
        if ($l->query("INSERT INTO `softwares` (`id`, `nome`, `descrição`, `preço`, `imagem`) VALUES (DEFAULT, '$n', '$d', '$p', '$i')") == true){
            echo "Software Adcionado com sucesso";
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }
    ?>
    <?php $l->close() ?>
</body>
</html>