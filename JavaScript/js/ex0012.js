var agora = new Date();
var hora = agora.getHours();
//console.log(`Agora são exatamente ${hora} horas`);
switch (hora) {
    case hora < 12:
        console.log(`Bom dia, são ${hora} horas!`)
        break
    case hora >= 12 && hora <= 18:
        console.log(`Boa tarde, são ${hora} horas!`)
        break
    case hora >= 19 && hora <= 23:
        console.log(`Boa noite, são ${hora} horas!`)
        break
    case hora <= 5:
        console.log(`Boa madrugada, são ${hora} horas!`)
        break
    default:
        break
}