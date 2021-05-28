
const expReg = {
    nombre: /^[a-zA-Z]{1,20}$/,
    pass: /^[a-zA-Z0-9\s]{1,5}$/,
    email: /^[a-zA-Z\.0-9]{1,10}\@[a-zA-Z]{1,10}\.[a-zA-Z]{1,3}$/
}

const formFormulario = {
    nombre: false,
    pass: false,
    email: false
}

const inputs = document.querySelectorAll(".seleccionoPorSiFalla")


inputs.forEach((input)=>{
    input.addEventListener("keydown", (e) =>{
        const input = e.target,
            name = input.name

        if(validar(input, expReg[name])){
            formFormulario[name] = true
        }else{
            formFormulario[name] = false
        }

    })
})

const formulario = document.getElementById("formulario")

formulario.addEventListener("submit", (e) =>{
    if(!(formFormulario.nombre && formFormulario.pass && formFormulario.email)){
        e.preventDefault();
    }
})











