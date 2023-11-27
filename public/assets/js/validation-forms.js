document.addEventListener('DOMContentLoaded', e => {
    //     e.preventDefault();

    let btnTadiRegister = document.querySelector("#tadi-register-button");

    //DNI (puede tener 7 ))
    document.querySelector("#dni").addEventListener("blur", e => {
        e.preventDefault();
        
        let dni =  document.getElementById("dni");
        let divMessageError = document.querySelector(".dni");
        if(dni.value.length < 7 || dni.value.length > 8){
           
            divMessageError.innerHTML = 'El número de dni debe contener 8 digitos';
            divMessageError.classList.remove('oculto');
            btnTadiRegister.setAttribute("disabled", "");
            btnTadiRegister.style.backgroundColor =  "#ffd584";
            dni.classList.add('input-error');
        }else{
            divMessageError.innerHTML = "";
            document.querySelector(".dni").classList.add('oculto');
            btnTadiRegister.disabled = false;
            btnTadiRegister.style.backgroundColor = "#ffc451";
            dni.classList.remove('input-error');
        }
    })

    //NUMERO DE TRAMITE (son siempre de X digitos?)
    document.querySelector("#tramite").addEventListener("blur", e => {
        e.preventDefault();
        
        let tramite =  document.getElementById("tramite");
        let divMessageError=  document.querySelector(".tramite");
        if(tramite.value.length < 15 || tramite.value.length > 15){
          
            divMessageError.innerHTML =  "El numero de trámite debe contener 15 digitos";
            divMessageError.classList.remove('oculto');
            btnTadiRegister.setAttribute("disabled", "");
            btnTadiRegister.style.backgroundColor =  "#ffd584";
            tramite.classList.add('input-error');
        }else{
            divMessageError.innerHTML = '';
            document.querySelector(".tramite").classList.add('oculto');
            btnTadiRegister.disabled = false;
            btnTadiRegister.style.backgroundColor = "#ffc451";
            tramite.classList.remove('input-error');
        }
    })

    //EMAIL (son siempre de X digitos?)
    document.querySelector("#email").addEventListener("blur", e => {
        e.preventDefault();
        
        let email =  document.getElementById("email");
        let divMessageError=  document.querySelector(".email");
        if(email.validity.typeMismatch){
          
            divMessageError.innerHTML =  "El valor introducido debe ser una dirección de correo electrónico.";
            divMessageError.classList.remove('oculto');
            btnTadiRegister.setAttribute("disabled", "");
            btnTadiRegister.style.backgroundColor =  "#ffd584";
            email.classList.add('input-error');
        }else{
            divMessageError.innerHTML = '';
            document.querySelector(".tramite").classList.add('oculto');
            btnTadiRegister.disabled = false;
            btnTadiRegister.style.backgroundColor = "##ffcd6b";
            email.classList.remove('input-error');
        }
    })

   
    // btnTadiRegister.addEventListener("click", e => {
    //     e.preventDefault();
        
    //      document.querySelector("#form-registro-tadi").submit();
    // });

    // let btnTadiLogin = document.querySelector("#btn-login-tadi"); 
    // btnTadiLogin.addEventListener("blur", e => {
    //     e.preventDefault();
    //     let seccionLogin = document.querySelector(".login-section"); 
    //     let visible = seccionLogin.getAttribute('visibility');

    //     if(visible == 'hidden'){
    //         seccionLogin.setAttribute('visibility', 'visible');
    //     }else{
    //         seccionLogin.setAttribute('visibility', 'hidden');
    //     }
       
    // })
    
});