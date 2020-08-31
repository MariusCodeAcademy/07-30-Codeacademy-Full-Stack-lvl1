"use strict";
console.log('for arr of obj .js');


const nums = [1, 8, 12, 17, 0]

// for ciklas atspausdinti reiksmems

for (let i = 0; i < nums.length; i++) {
    console.log(nums[i]);
}



//  asmenu kolekcija masyvas pilnas objektu

const persons = [{ // index 0
        name: 'bob',
        lastName: 'click',
        age: 25
    },
    { // index 1 
        name: 'tim',
        lastName: 'Brown',
        age: 52
    },
    { // index 2
        name: 'Jane',
        lastName: 'Dove',
        age: 25
    },
];

// for cikla ir atspausdinti visu asmenu vardus

for (let i = 0; i < persons.length; i++) {
    console.log(persons[i].name);
}