
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>TeaDoo - Login</title>
</head>

<body style="background-color: #131313;">

    <form style="background-color: rgb(28,28,28);" action="ValidLogin.php" method="POST">
        <h2>
            Tea<span class="T2">Doo</span>
        </h2>
        <div class="input">
            <input name="Email" required type="text" />
            <label>Email</label>
        </div>

        <div class="input">
            <input name="Senha" required type="password" />
            <label>Senha</label>
        </div>
        <div class="Register">
            <p class="Registrar">Ainda não tem uma conta?</p><a class="RegisterLink" href="RegistroHTML.php">Registre-se</a>
        </div>

        <div class="ErrorMessage">
            <?php 
                if(isset($Erro)){ ?>
                <p> <?php echo $Erro ?> </p>
            <?php } ?>
        </div>
        

        <button style="margin-top: 80px;" name="Btn-Login" type="submit">Enviar</button>
    </form>
</body>

</html>
