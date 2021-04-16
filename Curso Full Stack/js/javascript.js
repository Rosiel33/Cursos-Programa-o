// // var a = "placa captura";
// // console.log(a);

// alunos = new Array("jose","maria","pedro");

// var aluno;

// // for(i = 0; i< alunos.length; i++){
// //     console.log(alunos[i]);
// // }

// // Outra forma apresentado as posições

// // for( var aluno in alunos){
// //     console.log(aluno);
// // }

// // ou desta forma apresentando os elementos

// for(var aluno  of  alunos){
//     console.log(aluno);
// }




// FUNÇÕES        FUNÇÕES                 FUNÇÕES      FUNÇÕES


// function media(n1,n2) {
//     var nota1 = n1;
//     var nota2 = n2;
//     var media = (nota1 + nota2) / 2;
//     // console.log(media);

//     return media;
// }

// var resultado1 = media(6,8);
// var resultado2 = media(6,10);

// console.log(resultado1 +   " e "  + resultado2);


//  FUNÇÕES PARTE 2             FUNÇÕES PARTE 2         FUNÇÕES PARTE 2


// function saudacao() {
//     return "Boa noite";
// }
// var s = saudacao();
// console.log(s);


// var media = function (n1, n2) {
//     return (n1 + n2) / 2;
// }
// var m = media(4, 3);
// console.log(m);


// *******   CALCULO MEDIA   // CALCULO MEDIA         // CALCULO MEDIA

// var nomes = ["Pedro", "Maria", "Paulo"];

// var notasA = [7, 8, 5];
// var notasB = [8, 5, 9];

// function media(n1, n2) {
//     return (n1 + n2) / 2;
// }

// for (index in nomes) {
//     console.log(nomes[index] + "-" + notasA[index] + notasB);
// } [index] + "-" + media(notasA[index], notasB[index])


// function saudacao() {
//     return "ola mundo";
// }

// var s = saudacao();
// console.log(s);

// // FUNÇÃO ANÔNIMA        FUNÇÃO ANÔNIMA         FUNÇÃO ANÔNIMA 


// var media = function (n1, n2) {
//     return (n1 + n2) / 2;
// }
// var m = media(5, 6);

// console.log(m);

// // **************** FUNÇÃO ANÔNIMA   Segunda Opção


// var media = (nota1, nota2) => {
//     return (nota1 + nota2) / 2;
// }
// var notaFinal = media(7, 8);
// console.log(notaFinal);


// #######################         CÁLCULO NOTAS ALUNOS    CÁLCULO NOTAS ALUNOS    CÁLCULO NOTAS ALUNOS


var nome = ["pedro", "maria"];

var notaA = [1, 7];
notaB = [7, 8];

function media(n1, n2) {
    return (n1 + n2) / 2;
}


function passou(media) {


    // if(media > 7){
    //     resultado = "Aprovado";
    // }
    // return resultado;

    if (media > 7) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}


for (var index in nome) {

    var nota1 = notaA[index];
    var nota2 = notaB[index];
    var m = media(nota1, nota2);

    console.log(nome[index] + " Nota " + nota1 + nota2 +
        " E Nota " + nota2
        + " E média " + media(nota1, nota2) + " Situação" + passou(m));


    //  fim Do Exercício de Funções !!!!!
}


// ------------------ CRIANDO OBJETOS




var aluno = {
    nome: "Pedro",
    nota3: [5, 6, 7]
}

console.log(aluno["nota3"][2]);

aluno.matricula = 129;

aluno["sobrenome"] = "oliveira";

console.log(aluno);


var aluno4 = new Object();
aluno4.nome = "jovem";
console.log(aluno4);
