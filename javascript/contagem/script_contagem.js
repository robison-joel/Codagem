function contar() {

    let ini = document.getElementById('txti');

    let fim = document.getElementById('txtf');

    let passo = document.getElementById('txtp');

    let res = document.getElementById('res');


    // Etapa de validação

    if (ini.value.length == 0 || fim.value.length == 0 || passo.value.length == 0) {

        window.alert('ERRO - Preencha todos os campos em branco!');

    } else if (fim.value == 0 || passo.value == 0) {

        window.alert('ERRO - Os campos "Fim" e "Passo" não podem ser zero.');

    } else { // Fim da Etapa de validação

        res.innerHTML = `Contando:<br>`;

        let i = Number(ini.value);

        let f = Number(fim.value);

        let p = Number(passo.value);

        if (i < f) {

            for (let c = i; c <= f; c += p) {

                res.innerHTML += ` ${c} `;

            }


        } else {

            for (let c = i; c >= f; c -= p) {

                res.innerHTML += ` ${c} `;

            }

        }


    }
}