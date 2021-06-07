const formulario =  document.getElementById("formulario");
const inputs = document.querySelectorAll('#formulario input');



const expresiones = {
	email: /^[a-zA-Z0-9.]+@+[a-zA-Z]+\.[a-zA-z]+$/,
	pass: /^[a-zA-Z0-9]{8,14}$/
}

const campos = { 
    email: false,
    pass: false
} 



const validarFormulario = (e) => {
    switch (e.target.name){

        case "email":
            validarCampo(expresiones.email, e.target, 'email');
        break;

        case "pass":
            validarCampo(expresiones.pass, e.target, 'pass');
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
    if(!(campos.email && campos.pass)){
        e.preventDefault();
    }
});

 