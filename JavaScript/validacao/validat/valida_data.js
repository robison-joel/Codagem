function data() {

    var dia_ = document.getElementsByTagName('dia_txt');

    if (dia_ == 0) {
        window.alert('Erro');
    }




    var data = Number(dia_.value);




    document.getElementById("saida_").textContent = data;

}

/*

let dia_txt = 03;


if (dia_txt > 1 && dia_txt < 31) {

    console.log(`Hoje é dia ${dia_txt}.`);

} else {

    console.log(`ERRRRROOOOU!!!`);

}

if (dia_txt.length == 2) {

    console.log(`Hoje é dia ${dia_txt} e foi digitado corretamente.`);

} else {

    console.log(`ERRO no dia digitado.`);

}

*/