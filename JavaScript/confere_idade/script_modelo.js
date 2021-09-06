function verificar() {
    var data = new Date();

    var ano = data.getFullYear();

    var fano = document.getElementById('txtano');

    var res = document.querySelector('div#res');

    if (fano.value.length == 0 || fano.value.length < 4 || Number(fano.value) > ano) {
        window.alert('ERRO - Foi mal, tente novamente.');
    } else {
        var fsex = document.getElementByName('radsex');
        var Idade = ano - Number(fano.value);
        res.innerHTML = `Idade calculada: `
    }

}