"use strict";
console.log('loopStart.js');

// uzduosi atspausdinti skaicius nuo 1 iki 10

// console.log(1);
// console.log(2);
// console.log(3);

// pirmasis while cikas 
let begin = 1;
// while (begin <= 10) {
//     // loop body
//     console.log(begin);
//     // isejomo salyga
//     begin = begin + 1
// }


begin = 1
    // do while ciklas 
    // do {
    //     // loop body
    //     console.log(begin);
    //     // isejimo salyga 
    //     begin += 1;
    //     // begin++
    // } while (begin <= 100);


// norim atspausdinti skaicius nuo 1 iki 15 
// isskyrus skaiciu 8

begin = 0;
// while (begin < 15) {
//     // isejomo salyga
//     begin++;

//     // tikriname ar esama begin reiksme yra 8 ir jei je taip
//     // praleiziam iteracja 
//     if (begin === 8 || begin === 13 || begin === 3) {
//         // break;
//         continue;
//     } else {
//         console.log(begin);
//     }
// }

// for ciklas 

// for (pradzia; salyga; zingsnis) {
// loop body
//}

// uzduosi atspausdinti skaicius nuo 1 iki 10

for (let i = 1; i <= 10; i++) {
    // loopp body vygdomas kol salyga yra true
    // console.log(i);
}

// atspausdini skaicius nuo 56 iki 23 

for (let i = 56; i >= 23; i -= 4) {
    console.log(i);
}