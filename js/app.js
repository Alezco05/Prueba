const contacto = document.getElementById('contacto');
contacto.addEventListener('submit', validarPersona);
    
    
   function validarPersona(event){
    const nombre = document.querySelector('#nombre').value;
    const email = document.querySelector('#email').value;
    const mensaje = document.querySelector('#mensaje').value;
    const error = document.querySelector('#error');
    
    const div = document.createElement('div');
    
    if (nombre != "") {
        let caracteres = nombre.length;
        let expresion = /^[a-zA-Z]*$/;
        if (caracteres > 12) {

            div.innerHTML += "<br>Escriba menos de 12 caracteres</br>";
            error.appendChild(div);
            return false;
        }
        if (!expresion.test(nombre)) {
            div.innerHTML += "<br>Escriba su nombre con solo letras su nombre</br>";
            error.appendChild(div);
            return false;
        }
    }
    if (email !== "") {
        let expresion = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;;
        if (!expresion.test(email)) {
            div.innerHTML += "<br>Escriba correctamente el email</br>";
            error.appendChild(div);
            return false;
        }
    }
    if (mensaje === "") {

            div.innerHTML += "<br>Escriba su mensaje</br>";
        error.appendChild(div);
        return false;
    }
    return true;
}

