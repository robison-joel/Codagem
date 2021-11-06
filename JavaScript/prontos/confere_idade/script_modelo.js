function verificar() {
    var data = new Date();

    var ano = data.getFullYear();

    var fano = document.getElementById('txtano');

    var res = document.querySelector('div#res');

    if (fano.value.length == 0) { // Rotina de validação dos dados inseridos pelo usuário. 

        window.alert(`Ano incorreto`);

    } else if (fano.value.length != 4 || fano.value < 1000) { // Rotina de validação dos dados inseridos pelo usuário. 

        window.alert(`Não possui 4 dígitos, tente de novo!`);

    } else if (Number(fano.value) > ano) { // Rotina de validação dos dados inseridos pelo usuário.

        window.alert(`Essa data está no futuro. Espere até lá para fazer a verficação`);

    } else {
        var fsex = document.getElementsByName('radsex');

        var idade = ano - Number(fano.value);

        var genero = ''

        var img = document.createElement('img'); // Cria o elemento imagem na página

        img.setAttribute('id', 'foto');

        if (fsex[0].checked) {

            genero = "masculino";

            if (idade >= 0 && idade <= 2) {

                // BB Menino
                img.setAttribute('src', 'bebe_menino.png');

            } else if (idade > 3 && idade <= 10) {

                img.setAttribute('src', 'menino.png');

            } else if (idade > 10 && idade < 18) {

                // Garoto
                img.setAttribute('src', 'garoto.png');

            } else if (idade >= 18 && idade < 60) {

                // Homem
                img.setAttribute('src', 'homem.png');

            } else if (idade >= 60) {

                // Idoso
                img.setAttribute('src', 'homem_velho.png');

            }

        } else if (fsex[1].checked) {

            var genero = "feminino";

            if (idade >= 0 && idade <= 2) {

                // BB Menino
                img.setAttribute('src', 'bebe_menina.png');

            } else if (idade > 3 && idade <= 10) {

                img.setAttribute('src', 'menina.png');

            } else if (idade > 10 && idade < 18) {

                // Garoto
                img.setAttribute('src', 'garota.png');

            } else if (idade >= 18 && idade < 60) {

                // Homem
                img.setAttribute('src', 'mulher.png');

            } else if (idade >= 60) {

                // Idoso
                img.setAttribute('src', 'mulher_velha.png');

            }

        }

        res.style.textAlign = 'center';

        res.innerHTML = `<p><h4>Detectamos que você é do sexo ${genero} e tem ${idade} anos de idade.</h4></p>`;

        res.appendChild(img);


    }


}