<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
    <link rel="icon" href="img/icon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        main {
            margin-top: 50px;
            font-size: larger;
        }

        form {
            margin-top: 50px;
        }

        table {
            margin-top: 50px;
        }

        .page-logo {
            height: 50px;
            margin-right: 20px;
        }
    </style>
</head>
   

<body class="d-flex h-100 text-white bg-dark ">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="." class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img class="page-logo" src="img/logo.png" alt="Logo do Pet Shop">
                    <span class="fs-2">Vetericina Petinária</span>
                </a>

                <ul class="nav nav-pills">
                    <!-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Cadastrar</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Animais</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Funcionários</a></li> -->
                </ul>
            </header>
        </div>
        
        <main role="main" class="container text-center">
            <h2>Select an option:</h2><br>
            <div class="container">
                <div class="row">

                <div class="d-grid gap-2 col">
                        <h2>Animal</h2>
                        <a href="operations/Animal/registerAnimal.php" button type="button" class="btn btn-primary btn-lg">Register</button></a>
                        <a href="operations/Animal/listAnimal.php" button type="button" class="btn btn-primary btn-lg">List</button></a>
                        <a href="operations/Animal/editAnimal.php" button type="button" class="btn btn-primary btn-lg" href="#">Edit</button></a>
                        <a href="operations/Animal/deleteAnimal.php" button type="button" class="btn btn-primary btn-lg" href="#">Remove</button></a>
                    </div>

                    <div class="d-grid gap-2 col">
                        <h2>Employee</h2>
                        <a href="operations/Funcionario/registerEmployee.php" button type="button" class="btn btn-primary btn-lg">Register</button></a>
                        <a href="#" button type="button" class="btn btn-primary btn-lg" href="#">List</button></a>
                        <button type="button" class="btn btn-primary btn-lg" href="#">Edit</button>
                        <button type="button" class="btn btn-primary btn-lg" href="#">Remove</button>
                    </div>
                    
                    <div class="d-grid gap-2 col">
                        <h2>Appointment</h2>
                        <button type="button" class="btn btn-primary btn-lg" href="#">Register</button>
                        <button type="button" class="btn btn-primary btn-lg" href="#">Remove</button>
                    </div>
                </div>
            </div>
            
            <!-- <form method="post">
                <label for="marca">Digite a marca</label><br>
                <input type="text" name='marca' required><br><br>
                <label for="nome">Digite o nome</label><br>
                <input type="text" name='nome' required><br><br>
                <label for="ano">Digite o ano</label><br>
                <input type="number" name='ano' required minlength="1970" maxlength="2022"><br><br>
                <label for="pessoa">Digite o id do dono do carro</label><br>
                <input type="number" name='pessoa' required><br><br>
                <button class="btn btn-success" type="submit">Enviar</button><br>
            </form> -->
            
            <!--
            // require_once "config/utils.php";
            // require_once "model/Carro.php";
            // require_once "../Aula07/model/Pessoa.php";

            // if (isMetodo("POST")) {
            //     if (parametrosValidos($_POST, ["marca", "nome", "ano", "pessoa"])) {
            //         $marca = $_POST["marca"];
            //         $nome = $_POST["nome"];
            //         $ano = $_POST["ano"];
            //         $carro = $_POST["pessoa"];

            //         if (Carro::cadastrar($marca, $nome, $ano, $carro))
            //             echo "<p>Carro '<b>$marca</b>' foi cadatrado com sucesso!</p>";
            //         else
            //             echo "<p>Carro '<b>$marca</b>' não foi cadatrado!</p>";
            //     }
            // }
            ?>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Ano</th>
                        <th scope="col">ID Propetário</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // $lista = Carro::listar();
                    // foreach ($lista as $carro) {
                    //     echo "<tr>";
                    //     echo "<td>" . $carro["id"] . "</td>";
                    //     echo "<td>" . $carro["nome"] . "</td>";
                    //     echo "<td>" . $carro["marca"] . "</td>";
                    //     echo "<td>" . $carro["ano"] . "</td>";
                    //     echo "<td>" . Pessoa::getPessoaById($carro["id_pessoa"])["nome"] . "</td>";
                    //     echo "</tr>";
                    // }
                    ?>
                </tbody>
            </table>

        </main> -->
    </div>



</body>

</html>