function Pencil(Color, Length) {

    var code = 153;

    if (!(this instanceof Pencil)) {
        return new Pencil(Color, length);
    }

    this.Color = Color;
    this.Length = length;
    this.Write = function (text) {
        console.log(text);
    }
}

var myPencil = new Pencil('red', 44);
var myPencil2 = new Pencil('blue', 20);

// Herança

function Animal(){
    this.sleep = function(){
        console.log('zzzzz');
    }
}

function Dog (){
    this.bark = function(){
        console.log('woof');
    }
}

Dog.prototype = new Animal();

var myDog = new Dog();

