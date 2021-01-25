const NameUser           = document.getElementById("NameUser");
const LastNameUser       = document.getElementById("LastNameUser");
const EmailUser          = document.getElementById("EmailUser");
const Passw_User         = document.getElementById("Passwd-User");
const ConfirmPasswd_User = document.getElementById("ConfirmPasswd-User");

function validar(){

    
    if (NameUser.value === "" ||
        LastNameUser.value === "" ||
        EmailUser.value === "" ||
        Passw_User.value === "" ||
        Passw_User.value != ConfirmPasswd_User.value){
        
        let MsgError = document.getElementById("ErrorMessage");
        let Invalid = document.createElement("p");
        let TxtInvalid = document.createTextNode("Confira os campos e tente novamente!");
        Invalid.appendChild(TxtInvalid);
        MsgError.appendChild(Invalid);

        MsgError.style.color = "rgb(210, 60, 60)";
        MsgError.style.fontFamily = "sans-serif";
        MsgError.style.fontSize = "17px";
    }

}