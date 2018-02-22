// classical prototypal

function inherits(ctor, superCtor) {
  ctor.super_ = superCtor;
  ctor.prototype = Object.create(superCtor.prototype, {
     constructor: {
         value: ctor,
         enumerable: false,
         writable: true,
         configurable: true
     }
  });
};

var Person = function (name) {
  this.name = name;
};

Person.prototype.sayName = function () {
    console.log("Hi, my name is " + this.name);
};

var john = new Person('John');

john.sayName();

var Musician = function (name, instrument) {
    Musician.super_.call(this, name);
    this.instrument = instrument;
};

inherits(Musician, Person);

Musician.prototype.getInstrument = function () {
    console.log(this.instrument);
}

var Julia = new Musician('Julia', 'guitar');
Julia.sayName();
Julia.getInstrument();

// - - - - - - - - - - - - - - - - - - - - - - - - - - -