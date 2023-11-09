document.getElementById("btn__signup").addEventListener("click", signup);
document.getElementById("btn__iniciar-sesion").addEventListener("click", logIn);

window.addEventListener("resize", anchoPagina);

// Variables
const contenedor_login_signup = document.querySelector(".contenedor__login-signup");
const formulario_login = document.querySelector(".formulario__login");
const formulario_signup = document.querySelector(".formulario__signup");
const caja_trasera_login = document.querySelector(".caja__trasera-login");
const caja_trasera_signup = document.querySelector(".caja__trasera-signup"); 

function anchoPagina() {
    if (window.innerWidth > 850) {
        caja_trasera_login.style.display = "block"; 
        caja_trasera_signup.style.display = "block"; 
    } else {
        caja_trasera_signup.style.display = "block";
        caja_trasera_signup.style.opacity = "1"; 
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_signup.style.display = "none";
        contenedor_login_signup.style.left = "0";
    }
}

anchoPagina();

function logIn() {
    if (window.innerWidth > 850) {
        formulario_signup.style.display = "none";
        contenedor_login_signup.style.left = "1em";
        formulario_login.style.display = "block";
        caja_trasera_signup.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        formulario_signup.style.display = "none";
        contenedor_login_signup.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_signup.style.display = "block"; 
        caja_trasera_login.style.display = "none";
    }
}

function signup() {
    if (window.innerWidth > 850) {
        formulario_signup.style.display = "block";
        contenedor_login_signup.style.left = "25em";
        formulario_login.style.display = "none";
        caja_trasera_signup.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else {
        formulario_signup.style.display = "block";
        contenedor_login_signup.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_signup.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}
