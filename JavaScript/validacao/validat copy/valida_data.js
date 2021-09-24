function data() {

    var dia_ = document.getElementById('dia_id');

    var dia = Number(dia_.value);

    if (dia < 1 || dia > 31) {

        window.alert(`ERRO 1: O DIA digitado não corresponde a uma data válida.`);
    }

    // Adiciona o "0" ao início, caso 
    if (dia < 10 || dia.length == 1) {

        dia = "0" + dia;
    }

    window.alert(`Hoje é dia: ${dia}`);





    // document.getElementById("saida_").textContent = data;

}