<?php

//============================================================================================
                                                                                   //        =
    $servername = "localhost";                                                     //        =
    $username = "root";                                                            //        =
    $password = "";                                                                //        =
    $Nome = filter_input(INPUT_POST, 'Nome');                                      //        =
    $SobreNome = filter_input(INPUT_POST, 'SobreNome');                            //        =
    $NomeUsuario = filter_input(INPUT_POST, 'UserName');                           //        =
    $Email = filter_input(INPUT_POST, 'email');                                    //        =
    $Senha = filter_input(INPUT_POST, 'senha');                                    //        =
                                                                                   //        =
//============================================================================================

//CONEXÃO COM O BANCO

//============================================================================================
    $conn = new PDO("mysql:host=$servername;dbname=TeaDoo", $username, $password);        // =  
//============================================================================================

//VALIDAÇÃO DOS INPUTS

//============================================================================================
    if(empty($Nome))
    {
        $Error = "Confira os campos e tente novamente!";
    }else if(strlen($Nome) < 3){
        $Error = "Confira os campos e tente novamente!";
    }

    if(empty($SobreNome))
    {
        $Error = "Confira os campos e tente novamente!";
    }else if(strlen($SobreNome) < 3){
        $Error = "Confira os campos e tente novamente!";
    }

    if(empty($NomeUsuario))
    {
        $Error = "Confira os campos e tente novamente!";
    }else if(strlen($NomeUsuario) < 3){
        $Error = "Confira os campos e tente novamente!";
    }

    if(empty($Senha))
    {
        $Error = "Confira os campos e tente novamente!";
    }else if(strlen($Senha) < 12){
        $Error = "Confira os campos e tente novamente!";
    }else{
        try 
        {
            $conn = new PDO("mysql:host=$servername;dbname=TeaDoo", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Usuarios (Nome, SobreNome, UserName, Email, Senha)
            VALUES ('$Nome', '$SobreNome', '$NomeUsuario', '$Email', '$Senha')";
            $conn->exec($sql);
        } 
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
//============================================================================================

//FECHA A CONEXÃO

//====================
    $conn = null; // =
//====================

//Inclui a pagina de login se o $Error não foi setado e inclui RegistoHTML se for setado! 

//========================================

    if(empty($Error)){                 
        include('login.php');
    }
    else{
        include('RegistroHTML.php');
    }
//========================================




?>