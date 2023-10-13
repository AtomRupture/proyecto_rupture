const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Ejercicios en Colchoneta con Felipe de MoviFit | Clase 1',
        'name': 'cardio_2.mp4',
        'duration': '10:18',
    },
    {
        'id': 'a2',
        'title': 'Ejercicios en Colchoneta con Felipe de MoviFit | Clase 2',
        'name': 'cardio_3.mp4',
        'duration': '11:51',
    },

    {
        'id': 'a3',
        'title': 'Rueda Abdominal y Bandas de Resistencia con Felipe de MoviFit | Clase 3',
        'name': 'cardio_4.mp4',
        'duration': '3:59',
    },
    {
        'id': 'a4',
        'title': 'Cuerda de Batida con Felipe de MoviFit | Clase 4',
        'name': 'cardio_5.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a5',
        'title': 'Body Bar o Bastón de Peso con Felipe de MoviFit | Clase 5',
        'name': 'cardio_6.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a6',
        'title': 'Bastón de Peso o Body Bar con Felipe de MoviFit | Clase 6',
        'name': 'cardio_7.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a7',
        'title': 'Ejercicios con Balón de Pilates con Felipe de MoviFit | Clase 7',
        'name': 'cardio_8.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a8',
        'title': 'Ejercicios con FITBALL o BALON SUIZO con Felipe de MoviFit | Clase 8',
        'name': 'cardio_9.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a9',
        'title': 'Ejercicios con BALÓN SUIZO o FITBALL con Felipe de MoviFit | Clase 9',
        'name': 'cardio_10.mp4',
        'duration': '4:25',
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
