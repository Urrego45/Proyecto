const validar = (input, expReg) =>{
    const valor =  input.value

    if(expReg.test(valor)){
        input.classList.remove("incorrecto")
        return true
    }else{
        input.classList.add("incorrecto")
        return false
    }

}