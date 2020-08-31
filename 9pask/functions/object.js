"use strict";
console.log('obj.js');


// masyvas 
//    index        0       1    2       3
//                                   0  1   2
let personArr = ['John', 'Doe', 37, [1, 2, 15]];

// gauti Doe reiksme is masyvo

console.log(personArr[1]);

// gauti reiksme 15 is personArr
personArr[3][1];

console.log(personArr[3][1]);



// kuriam objekta 

let person = {
    name: 'John',
    surname: 'Doe',
    age: 37,
    greeting: function() {
        // console.log('hello');
        console.log(`${this.name} ${this.surname} is ${this.age} years old`)
    }
};

let person1 = {
    name: 'Bob',
    surname: 'Kilt',
    age: 51,
    greeting: function() {
        console.log(`${this.name} ${this.surname} is ${this.age} years old`)

    }
};

// gauti Doe reiksme is objekto

console.log(person['surname']);

// reiksme per taska

person.name

console.log(person.name);

// console.log(`${person.name} ${person.surname} is ${person.age} years old`);

person.greeting();
person1.greeting();