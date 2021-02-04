<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $DB_Name = "TeaDoo";
    $Email = $_POST['Email'];
    $Senha = md5($_POST['Senha']);
    $Botao = $_POST['Btn-Login'];
    $Connect = mysqli_connect($servername, $username, $password, $DB_Name);

    if(mysqli_connect_error()){
        echo "Erro Na conexão ".mysql_connect_error();
    }

    
    
    

?>