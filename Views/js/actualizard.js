
var Contrasena_Usuario =document.getElementById('Contrasena_Usuario');
var Contrasena_Usuario2 =document.getElementById('Contrasena_Usuario2');


var error =document.getElementById('error');
var mensaje =document.getElementById('mensaje');
var mensaje =document.getElementById('mensaje');
error.style.color ='red';
mensaje.style.color ='red';




       
var mayus = new RegExp("^(?=.*[A-Z])");
var lower = new RegExp("^(?=.*[a-z])");

var numeros = new RegExp("^(?=.*[0-9])");
var special = new RegExp("^(?=.*[!@#$&*])");
var len = new RegExp("^(?=.{13,})");

$("#Contrasena_Usuario").on ("keyup", function(){
    var pass =$("#Contrasena_Usuario").val();

    if(mayus.test(pass)&& special.test(pass)&& numeros.test(pass) && lower.test(pass) && len.test(pass)){

        mensaje.style.color ='green';
        $("#mensaje").text("segura");
    }else{
        $("#mensaje").text("insegura");
    }

});

function enviarFormulario(){
    

    var mensajesError = [];

    if (Contrasena_Usuario.value === null  || Contrasena_Usuario.value === '' ){
        mensajesError.push('Ingresa tu Correo Electronico')
        error.innerHTML= mensajesError.join(' ')
        return false;  
          
    }
    if (Contrasena_Usuario2.value === null  || Contrasena_Usuario2.value === '' ){
        mensajesError.push('Confirma tu correo electronico')
        error.innerHTML= mensajesError.join(' ')
        return false;  
          
    }
    if (Contrasena_Usuario.value !==   Contrasena_Usuario.value){
        mensajesError.push('Los correos no son iguales')
        error.innerHTML= mensajesError.join(' ')
        return false;  
          
    }

    
else {
    console.log('Enviando formulario...');
}
    
}