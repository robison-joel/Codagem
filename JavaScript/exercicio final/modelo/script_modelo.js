// script que analisa uma série de numeros

let num = document.querySelector('input#fnum');

let lista = document.querySelector('select#flista');

let res = document.querySelector('div#res');

let valores = [];

function isNumero(n) {

    if (Number(n) >= 1 && Number(n) <= 100) {

        return true;

    } else {

        return false;
    }

}

function inLista(n, l) {

    if (l.indexOf(Number(n)) != -1) {
        return true;
    } else {
        return false;
    }


}



// function que realiza o teste lógico 

function adicionar() {

    if (isNumero(num.value) && !inLista(num.value, valores)) {


        valores.push(num.value);

        res = valores.innerHtml



    } else {

        window.alert(`Número inválido`);
    }


}