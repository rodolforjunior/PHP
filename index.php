<?php 

if (!empty($_GET["name"])) {

    $response = file_get_contents("https://api.agify.io?name=".$_GET["name"]);
   $data = json_decode($response, true);
   $age = $data['age'];

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
    </head>
<body>
<form action="get">
        <label for="name" >Nome</label>
        <input type="text" name="name" placeholder="Digite um nome">
        <button>Adivinhe idade</button>
    </form>
    <?php if (isset($age)): ?>

Idade: <?= $age ?>

    <?php endif; ?>
</body>