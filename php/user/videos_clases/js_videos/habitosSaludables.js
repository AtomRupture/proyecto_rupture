const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Introducción al curso | De hábitos sedentarios a hábitos saludables y fitness #1',
        'name': 'habitos_1.mp4',
        'duration': '3:16',
    },
    {
        'id': 'a2',
        'title': 'Alimentación: De lo simple a lo complejo | De hábitos sedentarios a hábitos saludables y fitness #2',
        'name': 'habitos_2.mp4',
        'duration': '10:18',
    },
    {
        'id': 'a3',
        'title': '¿Qué debo comer? | De hábitos sedentarios a hábitos saludables y fitness #3',
        'name': 'habitos_3.mp4',
        'duration': '11:51',
    },

    {
        'id': 'a4',
        'title': '¿Cuántos platos al día? | De hábitos sedentarios a hábitos saludables y fitness #4',
        'name': 'habitos_4.mp4',
        'duration': '3:59',
    },
    {
        'id': 'a5',
        'title': 'Permitidos ¿Los cancelo? | De hábitos sedentarios a hábitos saludables y fitness #5',
        'name': 'habitos_5.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a6',
        'title': '¿Cuál es el mejor plato para bajar de peso? |De hábitos sedentarios a hábitos saludables y fitness#6',
        'name': 'habitos_6.mp4',
        'duration': '5:33',
    },
    {
        'id': 'a7',
        'title': '¿Qué proteína es la más recomendable? | De hábitos sedentarios a hábitos saludables y fitness #7',
        'name': 'habitos_7.mp4',
        'duration': '0:29',
    },

    {
        'id': 'a8',
        'title': '¿Debo tomar suplementos? | De hábitos sedentarios a hábitos saludables y fitness #8',
        'name': 'habitos_8.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a9',
        'title': '¿Cuánta agua debo tomar? | De hábitos sedentarios a hábitos saludables y fitness #9',
        'name': 'habitos_9.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a10',
        'title': '¿Las frutas engordan? | De hábitos sedentarios a hábitos saludables y fitness #10',
        'name': 'habitos_10.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a11',
        'title': '¿Qué son las colaciones y para qué sirven? |De hábitos sedentarios a hábitos saludables y fitness #11',
        'name': 'habitos_11.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a12',
        'title': '¿Debo comer menos para adelgazar? | De hábitos sedentarios a hábitos saludables y fitness #12',
        'name': 'habitos_12.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a13',
        'title': 'Introducción al segundo pilar: El Descanso |De hábitos sedentarios a hábitos saludables y fitness #13',
        'name': 'habitos_13.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a14',
        'title': '¿Cuántas horas debo dormir? | De hábitos sedentarios a hábitos saludables y fitness #14',
        'name': 'habitos_14.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a15',
        'title': '¿Afecta dormir poco a tu entrenamiento? | De hábitos sedentarios a hábitos saludables y fitness #15',
        'name': 'habitos_15.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a16',
        'title': '¿Cuánto debo descansar entre cada serie? | De hábitos sedentarios a hábitos saludables y fitness #16',
        'name': 'habitos_16.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a17',
        'title': '¿Descansar ayuda a crecer mis músculos? | De hábitos sedentarios a hábitos saludables y fitness #17',
        'name': 'habitos_17.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a18',
        'title': '¿Dormir poco engorda? | De hábitos sedentarios a hábitos saludables y fitness #18',
        'name': 'habitos_18.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a19',
        'title': '¿Es bueno realizar siestas? | De hábitos sedentarios a hábitos saludables y fitness #19',
        'name': 'habitos_19.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a20',
        'title': '¿Sabías de los microdescansos? | De hábitos sedentarios a hábitos saludables y fitness #20',
        'name': 'habitos_20.mp4',
        'duration': '1:12',
    },
];

data.forEach((video, i) => {
    let video_element = `
                <div class="video" data-id="${video.id}">

                    <p>${i + 1 > 9 ? i + 1 : '0' + (i + 1)}. </p>
                    <h3 class="title">${video.title}</h3>
                    <p class="time">${video.duration}</p>
                </div>
    `;
    video_playlist.innerHTML += video_element;
})

let videos = document.querySelectorAll('.video');
videos[0].classList.add('active');


videos.forEach(selected_video => {
    selected_video.onclick = () => {

        for (all_videos of videos) {
            all_videos.classList.remove('active');


        }

        selected_video.classList.add('active');


        let match_video = data.find(video => video.id == selected_video.dataset.id);
        main_video.src = 'videos/' + match_video.name;
        main_video_title.innerHTML = match_video.title;
    }
});
