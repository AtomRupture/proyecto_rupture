// OBTENER ELEMENTOS

const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const timeCount = quiz_box.querySelector(".timer .timer_sec");
const timeLine = quiz_box.querySelector("header .time_line");

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
    queCounter(1);
    startTimer(15);
    startTimerLine(0);
}

let que_count = 0;
let que_numb = 1;
let counter;
let timeValue = 18;
let widthValue = 0;

const next_btn = quiz_box.querySelector(".next_btn");
const result_box = document.querySelector(".result_box");
const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");
function quit(){
    window.history.go(-4);
}
result_box.onclick = function(){   
    location.reload();
}

// AL CLICKEAR EL BOTÓN DE SIGUIENTE

next_btn.onclick = ()=>{
    if(que_count < gifs.length - 1){
        que_count++;
        que_numb++;
        showQuestions(que_count);
        queCounter(que_numb);
        clearInterval(counter);
        startTimer(timeValue);
        clearInterval(counterLine);
        startTimerLine(widthValue);
        next_btn.style.display = "none";
    }else{
        showResultBox();
    }
}

//Obtener el titulo y los gifs
function showQuestions(index){
    const que_text = document.querySelector(".que_text");
    const option_list = document.querySelector(".option_list");
    let que_tag = '<span>'+ gifs[index].question +'</span>';
    let option_tag = '<div>'+ gifs[index].gif +'</div>';
    que_text.innerHTML = que_tag;
    option_list.innerHTML = option_tag;
}

function showResultBox(){
    info_box.classList.remove("activeInfo");
    quiz_box.classList.remove("activeQuiz");
    result_box.classList.add("activeResult");
}

function startTimer(time){
    counter = setInterval(timer, 1000);
    function timer(){
        timeCount.textContent = time;
        time--;
        if (time <9) {
            let addZero = timeCount.textContent;
            timeCount.textContent = "0" + addZero;
        }
        if (time < 0) {
            clearInterval(counter);
            timeCount.textContent = "00";
            next_btn.style.display = "block";
        }
    }
}

function startTimerLine(time){
    counterLine = setInterval(timer, 60);
    function timer(){
        time+=2.2;
        timeLine.style.width = time + "px";
        if (time > 620) {
            clearInterval(counterLine);
        }
    }
}


function queCounter(index){
    const bottom_ques_counter = quiz_box.querySelector(".total_que");
    let totalQuesCountTag = '<span><p>'+ index +'</p>de<p>'+ gifs.length +'</p>series</span>';
    bottom_ques_counter.innerHTML = totalQuesCountTag;
}
