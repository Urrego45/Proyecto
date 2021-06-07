
const expReg = {
    nombre: /^[a-zA-Z]{1,20}$/,
    apellido: /^[a-zA-Z]{1,20}$/,
    tel: /^[0-9]{1,10}$/,
    email: /^[a-zA-Z\.0-9]{1,10}\@[a-zA-Z]{1,10}\.[a-zA-Z]{1,3}$/,
    pass: /^[a-zA-Z0-9\s]{1,5}$/
}

const formFormulario = {
    nombre: false,
    apellido: false,
    tel: false,
    email: false,
    pass: false
}

const inputs = document.querySelectorAll(".f__input")


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
    if(!(formFormulario.nombre && formFormulario.apellido && formFormulario.tel && formFormulario.email && formFormulario.pass)){
        e.preventDefault();
    }
})











