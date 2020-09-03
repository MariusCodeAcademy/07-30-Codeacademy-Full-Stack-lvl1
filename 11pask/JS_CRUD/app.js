"use strict";
console.log('app.js');

let todos = [
    { name: 'do stuff', done: true, edit: true },
    { name: 'Learn Html', done: false, edit: false },
    { name: 'Style witn Css', done: true, edit: false },
    { name: 'Act with Js Forever', done: false, edit: false }

]

// isitraukiam elementus i javascript
const listElement = document.getElementById('list');
const inputElement = document.getElementById('input');
const addBtnElement = document.getElementById('add-todo-btn');


// Helper Functions ====================================================
function addTodo(todoText) {
    todos.push({ name: todoText, done: false, edit: false });
    render();
}

function deleteTodo(id) {
    // istrynimas su splice
    todos.splice(id, 1);
    render();
}




function render() {
    listElement.innerHTML = '';

    let classCheck, textChecked, todoId = 0;
    todos.forEach(function(todo) {

        // pasitikriname kokia yra done reiksme ir atitinkamai priskiriame klase
        // if (todo.done) {
        //     let classCheck = 'fa-check-circle';
        // } else {
        //     let classCheck = 'fa-circle-thin';
        // }

        // terenary operator 
        //               if    ?   kai true   :  kai false 
        classCheck = todo.done ? 'fa-check-circle' : 'fa-circle-thin';
        textChecked = todo.done ? 'line-through' : '';
        // if (todo.done) textChecked = 'line-through';


        listElement.innerHTML += `
        <li class="item" data-todo-id="${todoId}">
            <i class="fa ${classCheck}" aria-hidden="true"></i>
            <span class="text ${textChecked}">${todo.name}</span>
            <i class="fa fa-pencil-square" aria-hidden="true"></i>
            <i class="fa fa-trash" aria-hidden="true"></i>
        </li>
    `;
        todoId++;
    });


}

render();


// prideti mygtukui ivykiu pasiklausyma ir kai jis yra paspaudziamas 
// pelyte mes norim paimti reiksme is input lauko ir sukurti nauja todo
// prideti i todos masyva. 

addBtnElement.addEventListener('click', function() {
    // console.log('Click was pressed');
    // issisaugoti reiksme kuri ivesta i input lauka
    let inputVal = inputElement.value;
    // console.log(inputVal);
    //trumpa versija
    if (inputVal !== '') addTodo(inputVal);
    // dev versija 
    // if (inputVal !== '') {
    //     console.log('item added');
    //     addTodo(inputVal);
    // } else {
    //     console.log('false123');
    // }
    // isvalome ivesties lauka po ikelimo
    inputElement.value = '';
});

// ivesties lauke paspaudus enter norim ikelti nauja todo 

inputElement.addEventListener('keyup', function(event) {
    // isitikinti kad paspaustas mygtukas yra enter
    // console.log(event.keyCode);

    if (event.keyCode === 13) {
        // buvo paspaustas enter
        let inputVal = inputElement.value;
        // console.log(inputVal);
        //trumpa versija
        if (inputVal !== '') addTodo(inputVal);
        inputElement.value = '';
    }
})


// uzdesim event listeneri ant viso saraso ir atsirinksim ka paspaudem
// =======================================================================
// =======================================================================
// Delete handle 

listElement.addEventListener('click', function(event) {
    // console.log(event.target);
    let elemtetWasPressed = event.target;
    if (elemtetWasPressed.classList.contains('fa-trash')) {
        // console.log('trash pressed');
        let todoIdValueFromAttr = elemtetWasPressed.parentElement.getAttribute('data-todo-id');
        console.log(todoIdValueFromAttr);
        deleteTodo(todoIdValueFromAttr);
    }
})