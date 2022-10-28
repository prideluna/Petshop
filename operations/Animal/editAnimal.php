<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Animal</title>
</head>

<body>
    <a href='../../index.php'>Voltar ao index</a>
    <?php
    require_once "../../config/utils.php";
    require_once "../../model/Animal.php";
    
   
    $animal =null;

    // $animal = null;

    if (isMetodo("POST")) {
        if (parametrosValidos($_POST, ["id","name", "breed", "phoneOwner","date"])) {
            $resultado = Animal::editar($_POST["id"],$_POST["name"], $_POST["breed"], $_POST["phoneOwner"], $_POST["date"]);
            if ($resultado) {
                echo "<h1>Animal editado com sucesso!</h1>";
                echo "<a href='../../index.php'>Voltar ao index</a>";
                die;
            } else {
                echo "<h1>Erro ao editar a animal!</h1>";
                echo "<a href='../../index.php'>Voltar ao index</a>";
                die;
            }
        } else {
            echo "<h1>Problemas na requisição de editar</h1>";
            echo "<a href='../../index.php'>Voltar ao index</a>";
            die;
        }
    }
    if (isMetodo("GET")) {
        if (parametrosValidos($_GET, ["id"])) {
            $id = $_GET["id"];
            if (Animal::existeId($id)) {
                $animal = Animal::getAnimalById($id);
            } else {
                echo "<h1>Esta animal não existe</h1>";
                echo "<a href='../../index.php'>Voltar ao index</a>";
                die;
            }
        } else {
            echo "<h1>Você deve dizer qual é a animal a ser editada</h1>";
            echo "<a href='../../index.php'>Voltar ao index</a>";
            die;
        }
    }
    
    ?>

    <h1>Editando as informações de <?= $animal["nome"] ?></h1>



    <form method="POST">
        <label for="name">Animal name:</label><br>
        <input type="text" name="name" value="<?= $animal["nome"] ?>" placeholder="ex.: Pipper" required><br><br>

        <label for="breed">Breed</label><br>
        <input type="text" name="breed" value="<?= $animal["raca"] ?>" placeholder="ex.: Chow Chow" required><br><br>

        <label for="phoneOwner">Phone number</label><br>
        <input type="tel" name="phoneOwner" value="<?= $animal["tel_dono"] ?>" placeholder="ex.: 1122223333" required ><br><br>

        <label for="date">Register date</label><br>
        <input type="date" name="date" value="<?= $animal["data_cadastro"] ?>" required><br><br>
        <input type="hidden" name="id" value="<?= $pessoa["id"] ?>">
        <button class="btn btn-success" type="submit">Edit</button><br>
    </form>
</body>

</html>