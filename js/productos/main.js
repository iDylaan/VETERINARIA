function login(){
    var user, pass;

    user = document.getElementById("usuario").value;
    pass = document.getElementById("contraseña").value;

    if(user == "Admin" && pass == "1234"){

        window.location= ""; //pagina que abrira

    }
}