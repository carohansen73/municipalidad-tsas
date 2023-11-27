document.addEventListener('DOMContentLoaded', e => {


    let btnTadiLogin = document.querySelector("#btn-login-tadi"); 
    let seccionLogin = document.querySelector(".login-section"); 
    let formLogin = document.querySelector("#form-login-tadi"); 

    console.log(btnTadiLogin);

    btnTadiLogin.addEventListener("click", e => {
        e.preventDefault();
        seccionLogin.classList.remove("oculto")
    })

    document.addEventListener("click", function(e){
        var clic = e.target;
        console.log(clic);
        console.log(seccionLogin);
        if(!seccionLogin.contains(clic) && !btnTadiLogin.contains(clic)){
            seccionLogin.classList.add("oculto");
           }
        }, false);
})

