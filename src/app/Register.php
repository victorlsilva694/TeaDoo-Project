<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $Nome = $_POST["Nome"];
    $SobreNome = $_POST["SobreNome"]; 
    $NomeUsuario = $_POST["UserName"];
    $Email = $_POST["email"];
    $Senha = $_POST["senha"];


    $conn = new PDO("mysql:host=$servername;dbname=TeaDoo", $username, $password);

    if($Nome == "")
    {
        echo "<p class='Erro'>Erro</p>";
    }
    else if($SobreNome == "")
    {
        echo "<p class='Erro'>Erro</p>";
    }
    else if($NomeUsuario == "")
    {
        echo "<p class='Erro'>Erro</p>";
    }
    else if($Email == "")
    {
        echo "<p class='Erro'>Erro</p>";
    }
    else if($Senha == "")
    {
        echo "<p class='Erro'>Erro</p>";
    }
    else{
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=TeaDoo", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Usuarios (Nome, SobreNome, UserName, Email, Senha)
            VALUES ('$Nome', '$SobreNome', '$NomeUsuario', '$Email', '$Senha')";
            $conn->exec($sql);
            echo "New record created successfully";
        } 
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    $conn = null;
?>