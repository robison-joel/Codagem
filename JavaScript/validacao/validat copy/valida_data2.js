function data() {

    ////////////// DIA //////////////////////

    var dia_ = document.getElementById('dia_id'); // coleta os dados digitados pelo usuário

    var dia = Number(dia_.value); // Extrai o valor do elemento coletado 

    // Restringe o dia digitado aos dias de um mês
    if (dia < 1 || dia > 31) {

        window.alert(`ERRO 1: O DIA digitado não corresponde a uma data válida.`);
    }

    // Adiciona o "0" ao início, caso contenha só um digito
    if (dia < 10 || dia.length == 1) {

        dia = "0" + dia;
    }


    ////////////// MÊS //////////////////////

    var mes_ = document.getElementById('mes_id');

    var mes_1 = Number(mes_.value); // Extrai o valor do elemento coletado 

    // Restringe o mês digitado a 12
    if (mes_1 < 1 || mes_1 > 12) {

        window.alert(`ERRO 2 - Mês informado é incorreto.`);

    }

    // Adiciona o "0" ao início, caso contenha só um digito
    if (mes_1 < 10 || mes_1.length == 1) {

        mes_1 = "0" + mes_1;

    }

    // muda o numeral do mês pelo nome.
    if (mes_1 == 01) {

        mes = "Janeiro";

    } else if (mes_1 == 02) {

        mes = "Fevereiro";

    } else if (mes_1 == 03) {

        mes = "Março";

    } else if (mes_1 == 04) {

        mes = "Abril";

    } else if (mes_1 == 05) {

        mes = "Maio";

    } else if (mes_1 == 06) {

        mes = "Junho";

    } else if (mes_1 == 07) {

        mes = "Julho";

    } else if (mes_1 == 08) {

        mes = "Agosto";

    } else if (mes_1 == 09) {

        mes = "Setembro";

    } else if (mes_1 == 10) {

        mes = "Outubro";

    } else if (mes_1 == 11) {

        mes = "Novembro";

    } else if (mes_1 == 12) {

        mes = "Dezembro";

    } else {

        mes = mes_1.value;

    }

    ////////////// ANO //////////////////////

    var ano_ = document.getElementById('ano_id'); // coleta os dados digitados pelo usuário

    var ano_1 = Number(ano_.value); // Extrai o valor do elemento coletado 

    if (ano_1 < 1900 || ano_1 > 2020 || ano_1.length < 4) {

        window.alert(`ERRO 3 - Ano informado é incorreto.`);

    }

    window.alert(`Hoje é dia ${dia} de ${mes} de ${ano_1}.`);

}