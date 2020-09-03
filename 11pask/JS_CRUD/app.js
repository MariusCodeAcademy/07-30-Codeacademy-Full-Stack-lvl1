"use strict";
console.log('app.js');

let todos = [
    { name: 'do stuff', done: true, edit: true },
    { name: 'Learn Html', done: false, edit: false },
    { name: 'Style witn Css', done: true, edit: true },
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
// funkcijos aprasymas 
function deleteTodo(id) {
    // istrynimas su splice
    todos.splice(id, 1);
    render();
}

function renderSpanOrInput(todoItem) {
    if (todoItem.edit === true) {
        // grazinti input
        return `<input type="text" class="text" value="${todoItem.name}" >`;
    } else {
        // grazinti span
        return `<span class="text ${handleTextChecked(todoItem)}">${todoItem.name}</span>`;
    }
}

function handleClassCheck(currentTodo) {
    return currentTodo.done ? 'fa-check-circle' : 'fa-circle-thin';
}

function handleTextChecked(currentTodo) {
    if (currentTodo.done) return 'line-through';
}

function addValueToTodoList(myValue) {
    if (myValue !== '') addTodo(myValue);
    inputElement.value = '';
}

function getTodoIdValueFromAttr(itemThatWasClicked) {
    return itemThatWasClicked.parentElement.getAttribute('data-todo-id');
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
        // classCheck = todo.done ? 'fa-check-circle' : 'fa-circle-thin';
        // textChecked = todo.done ? 'line-through' : '';
        // if (todo.done) textChecked = 'line-through';




        listElement.innerHTML += `
        <li class="item" data-todo-id="${todoId}">
            <i class="fa ${handleClassCheck(todo)} check-box" aria-hidden="true"></i>
            ${renderSpanOrInput(todo)}
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
        addValueToTodoList(inputElement.value);
    }
})


// uzdesim event listeneri ant viso saraso ir atsirinksim ka paspaudem
// =======================================================================
// =======================================================================
// Delete handle 

listElement.addEventListener('click', function(event) {
    // console.log(event.target);
    let elemtetWasPressed = event.target;

    // elemento istrynimas ====================================
    if (elemtetWasPressed.classList.contains('fa-trash')) {
        // console.log('trash pressed');
        // let todoIdValueFromAttr = elemtetWasPressed.parentElement.getAttribute('data-todo-id');
        // console.log(todoIdValueFromAttr);
        // funkcijos kvietinys 
        // deleteTodo(todoIdValueFromAttr);
        deleteTodo(getTodoIdValueFromAttr(elemtetWasPressed));
    }

    // elemento check uncheck ====================================
    // ar paspaudem ant scrituliuko clase  check-box
    if (elemtetWasPressed.classList.contains('check-box')) {
        // console.log('check');
        let todoIdValueFromAttr = elemtetWasPressed.parentElement.getAttribute('data-todo-id');
        // pakeisti paspausto objekto done reiksme i priesinga
        // !true == false
        todos[todoIdValueFromAttr].done = !todos[todoIdValueFromAttr].done;
        render();
    }

    // elemento Edit ====================================

    if (elemtetWasPressed.classList.contains('fa-pencil-square')) {
        // console.log('pencil');

        // surandame li ant kurio paspaudem
        let todoIdValueFromAttr = elemtetWasPressed.parentElement.getAttribute('data-todo-id');

        // pasitikrinam ar paspausta reiksme edit yra true
        if (todos[todoIdValueFromAttr].edit) {
            // elmento edit yra true
            // pakeisti input elemnta i span
            console.log('pakeisti input elemnta i span');
            // issisaugoti pakeisto input reiksme ir tada perkelti ja i elemnta
            //    einam nuo paspausto edit el  i tevini el ir jame ieskom input elem reiksmes
            let editedTodoText = elemtetWasPressed.parentElement.querySelector('input').value;
            console.log(editedTodoText);
            todos[todoIdValueFromAttr].name = editedTodoText;
            todos[todoIdValueFromAttr].edit = false;

        } else {
            // elmento edit yra false 
            // pakeisti is span i input
            console.log('pakeisti is span i input');
            todos[todoIdValueFromAttr].edit = !todos[todoIdValueFromAttr].edit;

        }
        render();

    }


})