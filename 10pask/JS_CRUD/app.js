"use strict";
console.log('app.js');

let todos = [
    { name: 'do stuff', done: true, edit: true },
    { name: 'Learn Html', done: false, edit: false },
    { name: 'Style witn Css', done: true, edit: false },
    { name: 'Act with Js', done: false, edit: false },
]

// isitraukiam elementus i javascript
const listElement = document.getElementById('list');
const inputElement = document.getElementById('input');
const addBtnElement = document.getElementById('add-todo-btn');


function render() {
    listElement.innerHTML = '';

    let classCheck, textChecked
    todos.forEach(function(todo) {

        // pasitikriname kokia yra done reiksme ir atitinkamai priskiriame klase
        if (todo.done) {
            let classCheck = 'fa-circle';
        } else {
            let classCheck = 'fa-circle-thin';
        }

        // terenary operator 
        //               if    ?   kai true   :  kai false 
        classCheck = todo.done ? 'fa-circle' : 'fa-circle-thin';
        textChecked = todo.done ? 'line-through' : '';


        listElement.innerHTML += `
        <li class="item">
            <i class="fa ${classCheck}" aria-hidden="true"></i>
            <span class="text ${textChecked}">${todo.name}</span>
            <i class="fa fa-trash" aria-hidden="true"></i>
        </li>
    `;
    });


}

render()