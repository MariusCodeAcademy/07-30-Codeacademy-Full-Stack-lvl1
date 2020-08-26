console.log('veikia');


// typeof

const labas = typeof("Labas rytas");
// let output = typeof("Labas rytas");

// console.log('Labas rytas tipas yra: ' + typeof("Labas rytas"));

// console.log('Labas rytas tipas yra: ' + labas);

const myTrue = typeof true;

// console.log('true tipas yra: ' + myTrue);

// console.log('Window tipas yra ' + typeof window);

// console.log('console.log tipas yra ' + typeof console.log)


// Tipo konvertavimas i String

let test = 25;

const btn1 = document.getElementById('btn');

btn1.addEventListener('click', function() {
    alert('tu paspaudei mygtuka');
});


// console.log(typeof test);

test = String(test);

// console.log(typeof test);

// console.log("labas " + 5 + 10);

// Reiksmes tipo pavertimas i Number

let nrFromString = Number(test);

console.log(typeof nrFromString);

console.log(typeof Number("123"));

console.log('Task 2 ========================================');
// task 2 

// Number(" 123 ")  123
// Number("123z")   NaN
// Number(true)     1     
// Number(false)    0
// Number(undefined) NaN
// Number(null) 

console.log(Number(null));


// task 3 

// "" + 1 + 0
// "" - 1 + 0
// true + false
// 6 / "3"
// "2" * "3"
// 4 + 5 + "px"
// "$" + 4 + 5