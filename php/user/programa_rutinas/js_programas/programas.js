// OBTENER ELEMENTOS

const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");

// AL CLICKEAR EL BOTÓN DE EMPEZAR RUTINA

start_btn.onclick = ()=>{
    info_box.classList.add("activeInfo"); //MOSTRAR LA CAJA DE INFORMACIÓN
}

// AL CLICKEAR EL BOTÓN DE SALIR

exit_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //ESCONDER LA CAJA DE INFO
}

// AL CLICKEAR EL BOTÓN DE CONTINUAR

continue_btn.onclick = ()=>{
    info_box.classList.remove("activeInfo"); //
    quiz_box.classList.add("activeQuiz"); // ACTIVAR LA CAJA DE LAS RUTINAS
    showQuestions(0);
}

let que_count = 0;

const next_btn = quiz_box.querySelector(".next_btn");

//Obtener el titulo y los gifs
function showQuestions(index){
    const que_text = document.querySelector(".que_text");
    const option_list = document.querySelector(".option_list");
    let que_tag = '<span>'+ gifs[index].question +'</span>';
    let option_tag = '<div>'+ gifs[index].gif +'</div>';
    que_text.innerHTML = que_tag;
    option_list.innerHTML = option_tag;
}