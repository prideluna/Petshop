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
                    <img class="page-logo" src="/petshop/img/logo.png" alt="Logo do Pet Shop">
                    <span class="fs-2">Pet Shop</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Cadastrar</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Animais</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Funcionários</a></li>
                </ul>
            </header>
        </div>
        <main role="main" class="container text-center">
        <a href='../../index.php'>Voltar ao index</a>
        <?php
          
          require_once "../../config/utils.php";
          require_once "../../model/Animal.php";
        
        ?>       
                
         <h2>Tabela de pets cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>ID</th>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Phone Owner</th>
                    <th>Register Date</th>

                    <!-- <th>Date</th> -->
                </tr>
            </thead>
            <tbody>
        <?php
        $lista = Animal::listar();
        
        foreach ($lista as $animal) {
            
            echo "<tr>";
            echo "<td>" . $animal["id"] . "</td>";
            echo "<td>" . $animal["nome"] . "</td>";
            echo "<td>" . $animal["raca"] . "</td>";
            echo "<td>" . $animal["tel_dono"] . "</td>";
            echo "<td>" . $animal["data_cadastro"] . "</td>";

            $id = $animal["id"];
            echo "<td>
                <a href='editAnimal.php?id=$id'>Edit</a> | 
                <a href='index.php?deleteAnimal=$id'>Delete</a>
            </td>";
            echo "</tr>";
        
    
}
        ?>
        </tbody>
    </table>    
        </main>
    </div>



</body>

</html>
