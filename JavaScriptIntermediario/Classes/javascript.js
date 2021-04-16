// CLASSES


// function Pencil(){
//     this.color = 'red';
//     this.write = function(text){
//         console.log(text);
//     }
// }

class Pencil {
    constructor() {
        this.color = 'red';
    }

    write(text) {
        console.log(text);
    }
}
var myPencil = new Pencil('red');


// EXTENDS CLASSES 


class Animal {
    sleep() {
        console.log('zzzz');
    }
    comer() {
        console.log('come');
    }
}

class Dog extends Animal {
    bark() {
        console.log('woof');
    }

    sleep() {
        console.log(' dormindo zzzz');
        super.sleep();  //  'super' executa methodo  pais e tambem class dog
    }


}

class Cat extends Animal {
    miar() {
        console.log('miau')
    }
}

var myDog = new Dog();

var myCat = new Cat();