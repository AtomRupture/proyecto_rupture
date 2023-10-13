const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': '🧬CURSO DE HIPERTROFIA MUSCULAR | Introducción',
        'name': 'hipertrofia_1.mp4',
        'duration': '3:16',
    },
    {
        'id': 'a2',
        'title': '🧬TIPOS DE HIPERTROFIA MUSCULAR - Curso Hipertrofia #2',
        'name': 'hipertrofia_2.mp4',
        'duration': '10:18',
    },
    {
        'id': 'a3',
        'title': '🧬¿COMO CALCULAR LA MASA MUSCULAR? - Curso Hipertrofia #3',
        'name': 'hipertrofia_3.mp4',
        'duration': '11:51',
    },

    {
        'id': 'a4',
        'title': '🧬 HIPERTROFIA SARCOMERICA Y SARCOPLASMATICA - Curso Hipertrofia #4',
        'name': 'hipertrofia_4.mp4',
        'duration': '3:59',
    },
    {
        'id': 'a5',
        'title': '🧬COMO SE LOGRA HIPERTROFIA MUSCULAR - Curso Hipertrofia #5',
        'name': 'hipertrofia_5.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a6',
        'title': '🔗TENSION MECANICA ⚙️- Curso Hipertrofia #6',
        'name': 'hipertrofia_6.mp4',
        'duration': '5:33',
    },
    {
        'id': 'a7',
        'title': '🤯ESTRÉS METABÓLICO - Curso Hipertrofia #7',
        'name': 'hipertrofia_7.mp4',
        'duration': '0:29',
    },
    {
        'id': 'a8',
        'title': '🤕DAÑO MUSCULAR - Curso Hipertrofia #8',
        'name': 'hipertrofia_8.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a9',
        'title': '🧬VOLUMEN IDEAL de ENTRENAMIENTO para HIPERTROFIA - Curso Hipertrofia #9',
        'name': 'hipertrofia_9.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a10',
        'title': '🧠Calcula el VOLUMEN de ENTRENAMIENTO - Curso Hipertrofia #10',
        'name': 'hipertrofia_10.mp4',
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
