// Script da lâmpada

const liga_ = document.getElementById('liga');

const desliga_ = document.getElementById('desliga');

const lamp_ = document.getElementById('idlampada');

function lamp_quebrada() {

}

liga_.addEventListener('click', lamp_liga);

function lamp_liga() {
    idlampada.src = 'pics/ligada.jpg';
}

desliga_.addEventListener('click', lamp_desliga);

function lamp_desliga() {
    idlampada.src = 'pics/desligada.jpg';
}

idlampada.addEventListener('mouseover', lamp_liga);
idlampada.addEventListener('mouseleave', lamp_desliga);
idlampada.addEventListener('dblclick', lamp_quebra);



function lamp_quebra() {
    idlampada.src = 'pics/quebrada.jpg'
}