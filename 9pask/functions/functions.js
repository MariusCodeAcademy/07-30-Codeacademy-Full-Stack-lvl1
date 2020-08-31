"use strict";
console.log('functions.js');

// lokalus kintamieji

// globali aibe arba global scope
// global scope kintamasis 
let globalScopeVar = 'dangtis';

// function showMessage() {
//     // lokali aibe arba local scope
//     // alert('hello from function');
//     let localVar = 'kopustas';
//     globalScopeVar = 'nebedangtis'
//     console.log(globalScopeVar);
//     // localios aibes pabaiga
// }
// funkcijos kvietinys
// showMessage();

// console.log('localus kint', localVar);



//  funkcija su argumentais 

// function multiplyNums() {
//     let num1 = 5;
//     let num2 = 10
//     let ats = num1 * num2;
//     console.log(ats);
// }

// // kvieciam fcija
// multiplyNums();

// function multiplyNums(num1, num2) {
//     let ats = num1 * num2;
//     ats = ats - num2;
//     // let atimtis = num1 - num2;
//     // console.log(atimtis);

//     return ats; // po return funkcija bebevygdoma toliau
//     console.log(ats);
// }

// // kvieciam fcija
// let valueFromFunction = multiplyNums(5, 10);

// console.log(valueFromFunction + 'kvm');

// // multiplyNums(25, 100);

// // multiplyNums();


// parasysti funkcija kuri ima 3 argumentus pirmus 
// du sudaugina ir padalina is trecio 
// grazina atsakyma 

function multiplyDivide(num1, num2, num3) {
    let temp = num1 * num2;
    temp = temp / num3;
    // console.log(temp);
    return temp;
}

function outputValToHTML(val) {
    /// kaip isvesti reiksme i html
}

let ats = multiplyDivide(2, 5, 2);
// gauta reiksme padauginti 5;
let atsX5 = ats * 5;

console.log(atsX5);