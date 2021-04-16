
// function calcMedia() {
//     return (this.nota[0] + this.nota[1]) / 2;
// }


// var aluno = {
//     nome: "pedro",
//     nota: [5, 8],

//     media: calcMedia,
// }

// var aluno1 = {
//     nome: "João",
//     nota: [5, 9],

//     media: calcMedia,

// }

// console.log(aluno.nome);
// console.log(aluno.media(aluno.nota[0],
//     aluno.nota[1]));


// console.log(aluno1.nome);
// console.log(aluno1.media(aluno1.nota[0],
//     aluno1.nota[1]));


// // ---------------- Methodos Construtores ---------------------







// function criarAluno(nome, n1, n2) {
//     return {
//         nome: nome,
//         nota: n1,
//         nota2: n2,
//         media: function () {
//             return (this.nota + this.nota2) / 2;
//         }
//     }
// }

function aluno(nome,n1,n2){
    this.nome=nome;
    this.nota1=n1;
    this.nota2=n2;

    this.media= function(){
        return (this.nota1 + this.nota2)/2;
    }
}

var a = new aluno("Prestes",5,5);

console.log(a.media());

// var turma = [
//     criarAluno("Pedro", 7, 9),
//     criarAluno("Marcio", 7, 7),
//     criarAluno("Marcia", 99, 7)
// ]


// var aluno = turma[1];
// var aluno2 = turma[0];

// turma.forEach(function (elemento) {
//     console.log(elemento);
// })

// for(var aluno of turma){
//     console.log(aluno.nome + ": media: " + aluno.media());
// }




// ------------ RESUMO SOBRE JAVASCRIPT-OO --------------------


function obj(n,s){

    this.nome = n;
    this.sobrenome =s;
    
}



var a = new obj("Paulo","roxa");

console.log(a);
console.log(a["nome"])
console.log(a["sobrenome"])