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
                    <span class="fs-2">Vetericina Petinária</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Cadastrar</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Animais</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Funcionários</a></li>
                </ul>
            </header>
        </div>
        

        <main role="main" class="container text-center">
         
            
            <form method="post">
                <label for="name">Employee name:</label><br>
                <input type="text" name='name' placeholder="ex.: Isaac Newton" required><br><br>

                <label for="email">Email</label><br>
                <input type="email" name='email' placeholder="ex.: isaac.newton@gmail.com" required><br><br>

                <label for="date">Register date</label><br>
                <input type="date" name='date' required><br><br>
        
                <button class="btn btn-success" type="submit">Enviar</button><br>
            </form>
            
            </tbody>
            </table>

        </main>
    </div>
</body>

</html>