// Kintamuju sukurimas 

/*
- Deklaruokite du kintamuosius: name ir birthDay
- birthDay priskirkite tekstą “gegužės 12”
- name priskirkite tekstą kurį vartotojas įveda su prompt()
- Atspausdinkite viską konsolėje, pvz.: “Tomas yra gimęs gegužės 12”
*/

let name;
let birthDay;

// birthDay priskirkite tekstą “gegužės 12”

birthDay = 'geguzes 12';

// console.log(birthDay);

// name = prompt('Iveskite savo varda');
// console.log(name);

//Atspausdinkite viską konsolėje, pvz.: “Tomas yra gimęs gegužės 12”
console.log(name + ' yra gimes ' + birthDay);


// 1 sukurtumet 4 kintamuosius
// 2 priskirtumet jiems skitringas skaitines reikmes.
// 3 atspausdinti consoleje, pirmu dvieju skaiciu suma
// 4 atspausdinti konsolele, 3 ir ketvirto skaiciau sandauga
// 5 atspausdinti "Sudejome <1kint> ir <3kintamasis> ir gavome <suma>"

// let x; 
// let y; 
// let j; 
// let k; 


let x, y, j, k;

console.log('x kintamasis iki reiksmes priskyrimo: ' + x)

x = 5;
y = 10;
j = 7;
k = 2;

// 3 atspausdinti consoleje, pirmu dvieju skaiciu suma
console.log(x + y);

// 4 atspausdinti konsolele, 3 ir ketvirto skaiciau sandauga
console.log(j * k);

// 5 atspausdinti "Sudejome <1kint> ir <3kintamasis> ir gavome <suma>"

console.log('Sudejome ' + x + ' ir ' + j + ' ir gavome: ' + (x + j));

console.log('siandien ' + '5' + ' pirmadienis');

console.log('5' + 7);

// reiksmiu isvedimas i html
document.getElementById('output').innerText = 'Sudejome ' + x + ' ir ' + j + ' ir gavome: ' + (x + j)