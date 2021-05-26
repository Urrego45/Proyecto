const selects = document.getElementById('selectInsumo');
const contenedor = document.getElementById("contenedor");
const div = document.getElementById('clonacion');
const entrada = document.getElementById('entrada');
const agregar = document.getElementById('agregar');


agregar.addEventListener('click', e => {
    
    const selectClon = div.cloneNode(true)
    contenedor.appendChild(selectClon)
    selectClon.querySelector("#selectInsumo").selectedIndex = selects.selectedIndex;
    console.log(selectClon) 
    selects.value = 0;
    entrada.value = 0; 
})


function quitar(button){
    button.parentNode.parentNode.remove();
}