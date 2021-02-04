<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="DashBoard.css">
    <title>TeaDoo - DashBoard</title>
</head>

<body>

<!-- {
    Menu do lado esquerdo{
        Interações:

        Foto - Inicialmente ao fazer o login será adicionado uma foto defalt. O usuario Poderá adicionar a foto em que
        desejar.
                
        Itens do menu.

        Opções - Terá opções de perfil, da comunidade (Sair, denunciar, bloquear), Privacidade e opções.
    }
-->

    <div class="ContainerMain">

        <div class="Content-Menu-Rigth">

            <div class="UserDefinition">
                <div class="UsrImage">
                    <img class="userImage" src="img/Captura de ecrã no 2021-01-17 05-35-38.png" alt="">
                </div>
                <!-- { Essa div vazia é para pegar o nome do usuario pelo javascript com appendChild } -->
                <div class="UserName"></div>
            </div>
            <hr class="UsrSeparation">

            <div class="Buttons-Menu">
                <button id="Buttons-Icons" type="button">
                    <img src="img/add-friend(2).png" class="img-Friend" alt="">
                    <span class="FriendsBtn">Amigos</span>
                </button>
                <button id="Buttons-Icons" type="button">
                    <img src="img/diversity.png" class="img-Friend" alt="">
                    <span class="FriendsBtn">Comunidades</span>
                </button>
                <button id="Buttons-Icons" type="button">
                    <img src="img/chat(2).png" class="img-Friend" alt="">
                    <span class="FriendsBtn">Chat</span>
                </button>
                <button id="Buttons-Icons" type="button">
                    <img src="img/question.png" class="img-Friend" alt="">
                    <span class="FriendsBtn">Perguntar</span>
                </button>
                <button id="Buttons-Icons" type="button">
                    <img src="img/target.png" class="img-Friend" alt="">
                    <span class="FriendsBtn">Responder</span>
                </button>
            </div>
            <hr class="UsrSeparation2">
        </div>

    </div>

</body>

</html>