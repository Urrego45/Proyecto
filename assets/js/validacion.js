const formulario =  document.getElementById("formulario");
const inputs = document.querySelectorAll('#formulario input');



const expresiones = {
	texto: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    textoSim: /^[a-zA-Z0-9-_#\s]{1,40}$/, 
	pass: /^[a-zA-Z0-9]{8,14}$/, 
	email: /^[a-zA-Z0-9.]+@+[a-zA-Z]+\.[a-zA-z]+$/,
	tel: /^\d{10}$/,
    numeros: /^[\d]+$/
}

const campos = { 
    email: false,
	pass: false,
    texto: false,
    tel: false,
    textoSim: false,
    numeros: false
} 



const validarFormulario = (e) => {
    switch (e.target.name){
        case "email":
            validarCampo(expresiones.email, e.target, 'email');
        break;

        case "pass":
            validarCampo(expresiones.pass, e.target, 'pass');
        break;

        case "nombre":
            validarCampo(expresiones.texto, e.target, 'nombre');
        break;

        case "apellido":
            validarCampo(expresiones.texto, e.target, 'apellido');
        break;

        case "tel":
            validarCampo(expresiones.tel, e.target, 'tel');
        break;

        case "nombreP":
            validarCampo(expresiones.textoSim, e.target, 'nombreP');
        break;

        case "direccion":
            validarCampo(expresiones.textoSim, e.target, 'direccion');
        break;

        case "precio":
            validarCampo(expresiones.numeros, e.target, 'precio');
        break;

        case "stockI":
            validarCampo(expresiones.numeros, e.target, 'stockI');
        break;

        case "stockA":
            validarCampo(expresiones.numeros, e.target, 'stockA');
        break;

        case "entrada":
            validarCampo(expresiones.numeros, e.target, 'entrada');
        break;

        case "perdidas":
            validarCampo(expresiones.numeros, e.target, 'perdidas');
        break;

        case "ventas":
            validarCampo(expresiones.numeros, e.target, 'ventas');
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
    if(!(campos.email && campos.numeros && campos.pass && campos.tel && campos.texto)){
        
    }
});

 