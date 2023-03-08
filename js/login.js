let password = document.getElementById("password-field");
let eyeicon = document.getElementById("eyeicon");

eyeicon.onclick = function() {
    if (password.type == "password"){
        password.type = "text";
        eyeicon.className = "fa-thin fa-eye"
    }
    else{
        password.type = "password";
        eyeicon.className = "fa-thin fa-eye-slash"
    }
}