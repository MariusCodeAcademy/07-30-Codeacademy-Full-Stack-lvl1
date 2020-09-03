"use strict";
console.log('arrow');

function multiply(num1, num2, num3) {
    console.log(num1 * num2 * num3);
}

// multiply(3, 2, 3);
multiply(3, 2, 3)

// anoninmine funkcija
// multiplyAnonymous(3, 2, 3); // cabt access
let multiplyAnonymous = function(num1, num2, num3) {
    // console.log(num1 * num2 * num3)
    return (num1 * num2 * num3)
}


multiplyAnonymous(3, 2, 3);

// arrow functios 
let arrFunction = (num1, num2, num3) => (num1 * num2 * num3)

arrFunction(3, 2, 3)

console.log(arrFunction(3, 2, 3));



// arrow fcia kuri grazina 

let greeting = name => {
    console.log('hello ' + name);
}

greeting('Bob');

let greeting2 = name => console.log('hello ' + name);

greeting2('Bob2');


let greeting3 = () => console.log('hello hello');

greeting3();