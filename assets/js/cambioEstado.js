const estado = document.getElementById("estado");

const est = estado.value 



estado.addEventListener('click', e => {
    if(est == "activo"){
        estado.value = "inactivo"
        estado.classList.remove('btn-success')
        estado.classList.add('btn-danger')
    }else if(est == "inactivo"){
        estado.value = "activo"
        estado.classList.remove('btn-danger')
        estado.classList.add('btn-success')
    }
})