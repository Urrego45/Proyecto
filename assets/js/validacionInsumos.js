const formulario =  document.getElementById("formulario");
const inputs = document.querySelectorAll('#formulario input');



const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ]{1,40}$/,
	precio: /^\d{1,3}\.[\d]{3}$/,
	stockI: /^\d{1,10}$/,
	stockA: /^\d{1,10}$/,
	entrada: /^\d{1,10}$/,
	perdidas: /^\d{1,10}$/
}

const campos = { 
    nombre: false,
	precio: false,
	stockI: false,
	stockA: false,
	entrada: false,
	perdidas: false
} 



const validarFormulario = (e) => {
    switch (e.target.name){
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;

        case "precio":
            validarCampo(expresiones.precio, e.target, 'precio');
        break;

        case "stockI":
            validarCampo(expresiones.stockI, e.target, 'stockI');
        break;

        case "stockA":
            validarCampo(expresiones.stockA, e.target, 'stockA');
        break;

        case "entrada":
            validarCampo(expresiones.entrada, e.target, 'entrada');
        break;

        case "perdidas":
            validarCampo(expresiones.perdidas, e.target, 'perdidas');
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
    if(!(campos.nombre && campos.precio && campos.stockI && campos.stockA && campos.entrada && campos.perdidas)){
        e.preventDefault()
    }
});

 