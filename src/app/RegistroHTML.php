<?php

    if(!isset($Nome)){
        $Nome = "";
    }
    if(!isset($SobreNome)){
        $SobreNome = "";
    }
    if(!isset($NomeUsuario)){
        $NomeUsuario = "";
    }
    if(!isset($Email)){
        $Email = "";
    }
    if(!isset($Senha)){
        $Senha = "";
    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="Register.css">
    <title>Register - TeaDoo</title>
</head>

<body>

    <div class="Container-Main">
        <form action="Register.php" method="POST">
            <h1 class="T1">Tea<span class="T2">Doo</span></h1>
            <div class="Containers-Inputs">
                <div class="Form-Register-P1">
                    <div class="form-floating mb-3" style="color: rgb(255, 255, 255);">
                        <input id="NameUser" name="Nome" value="<?php echo htmlspecialchars($Nome) ?>"
                            style="background-color: transparent; border: none; border-bottom: 3px solid rgb(0, 170, 127); color: rgb(255, 255, 255)"
                            type="text" class="form-control" id="floatingInput" placeholder="Nome">
                        <label for="floatingInput">Nome</label>
                    </div>
                </div>
                <div class="Form-Register-P2">
                    <div class="form-floating mb-3" style="color: rgb(255, 255, 255);">
                        <input id="LastNameUser" name="SobreNome" value="<?php echo htmlspecialchars($SobreNome) ?>"
                            style="background-color: transparent; border: none; border-bottom: 3px solid rgb(0, 170, 127); color: rgb(255, 255, 255)"
                            type="text" class="form-control" id="floatingInput" placeholder="SobreNome">
                        <label for="floatingInput">SobreNome</label>
                    </div>
                </div>
            </div>

            <div class="Container-C2">
                <div class="form-floating mb-3" style="color: rgb(255, 255, 255);">
                    <input id="ExibName" name="UserName" value="<?php echo htmlspecialchars($NomeUsuario) ?>"
                        style="background-color: transparent; border: none; border-bottom: 3px solid rgb(0, 170, 127); color: rgb(255, 255, 255)"
                        type="text" class="form-control" id="floatingInput" placeholder="@SeuUsuário">
                    <label for="floatingInput">Nome de exibição</label>
                </div>
            </div>

            <div class="Container-C3">
                <div class="form-floating mb-3" style="color: rgb(255, 255, 255);">
                    <input id="EmailUser" value="<?php echo htmlspecialchars($Email) ?>"
                        style="background-color: transparent; border: none; border-bottom: 3px solid rgb(0, 170, 127); color: rgb(255, 255, 255)"
                        type="email" name="email" class="form-control" id="floatingInput" placeholder="@SeuUsuário">
                    <label for="floatingInput">Email</label>
                </div>
            </div>

            <div class="Container-C4">
                <div class="form-floating mb-3" style="color: rgb(255, 255, 255);">
                    <input id="Passwd-User" value="<?php echo htmlspecialchars($Senha) ?>"
                        style="background-color: transparent; border: none; border-bottom: 3px solid rgb(0, 170, 127); color: rgb(255, 255, 255)"
                        type="password" name="senha" class="form-control" id="floatingInput" placeholder="@SeuUsuário">
                    <label for="floatingInput">Senha</label>
                </div>
            </div>

            <div class="Container-C5">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label style="color: rgb(126, 126, 126);" class="form-check-label" for="defaultCheck1">
                        Eu li e aceito os
                    </label>
                    <a class="TermosDeUso" href="#">Termos de uso</a>
                </div>
            </div>
            <div id="ErrorMessage">

                <?php 
                    if(isset($Error)){ ?>
                    <p> <?php echo $Error ?> </p>
                <?php } ?>

            </div>

            <div class="Container-C6">
                <button id="BtnEnv" type="submit">Cadastrar</button>
            </div>
        </form>
    </div>


    <script src="Register.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
        crossorigin="anonymous"></script>
</body>

</html>