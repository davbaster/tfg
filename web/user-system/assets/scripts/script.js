
  function cambiarDisplay(e) {
    // var element = document.getElementById("forgot-box");
    let iniciador = e.target.id;

    // let forgotbox = document.getElementById("forgot-box");
    let loginbox = document.getElementById("login-box"); 

    switch(iniciador){

        case "forgot-link":
            var forgotbox = document.getElementById("forgot-box");

            forgotbox.classList.remove("hide-form"); //despliega forgot password box
            loginbox.classList.add("hide-form"); //ocultar loginbox
              
            break;
        
        case "back-link":
            var forgotbox = document.getElementById("forgot-box");

            forgotbox.classList.add("hide-form"); //oculta forgot password box
            loginbox.classList.remove("hide-form"); //despliega loginbox
            // alert("llego a backlink");     
            break;

        case "register-link":

            var registerbox = document.getElementById("register-box");

            registerbox.classList.remove("hide-form"); //despliega form de registro
            loginbox.classList.add("hide-form"); //ocultar loginbox

            break;
        case "login-link":

            var registerbox = document.getElementById("register-box");

            registerbox.classList.add("hide-form"); //oculta form de registro
            loginbox.classList.remove("hide-form"); //despliega loginbox

            break;    

        default:
            alert("No funciono");

    }


  }