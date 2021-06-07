const formulario =  document.getElementById("formulario");
const inputs = document.querySelectorAll('#formulario input');



const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ]{1,40}$/,
	direccion: /^[a-zA-Z0-9\s\#\-\_]{1,20}$/,
	tel: /^\d{10}$/,
	email: /^[a-zA-Z0-9.]+@+[a-zA-Z]+\.[a-zA-z]+$/
}

const campos = { 
    nombre: false,
	direccion: false,
    tel: false,
    email: false
} 



const validarFormulario = (e) => {
    switch (e.target.name){
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;

        case "direccion":
            validarCampo(expresiones.direccion, e.target, 'direccion');
        break;

        case "tel":
            validarCampo(expresiones.tel, e.target, 'tel');
        break;

        case "email":
            validarCampo(expresiones.email, e.target, 'email');
        break;

    }
}

const validarCampo = (expresion,input, campo) =>{
    if(expresion.test(input.value)){
        document.getElementById(`grupo_${campo}`).classList.remove('grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo_${campo} .error`).classList.remove('error-activo');
        campos[campo] = true;
    }else{
        document.getElementById(`grupo_${campo}`).classList.add('grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.remove('grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo_${campo} .error`).classList.add('error-activo');
        campos[campo] = false;
    }
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});



formulario.addEventListener("submit", (e)=>{
    console.log(campos)
    if(!(campos.nombre && campos.direccion && campos.tel && campos.email)){
        e.preventDefault()
    }
});

 