const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Introducción - La rutina PERFECTA de 5 minutos para aumentar tu estatura',
        'name': 'postura_1.mp4',
        'duration': '3:16',
    },
    {
        'id': 'a2',
        'title': 'Desbloquea tu movilidad en 5 minutos (ESTIRAMIENTO DIARIO)',
        'name': 'postura_2.mp4',
        'duration': '10:18',
    },
    {
        'id': 'a3',
        'title': 'La mejor rutina casera para mejorar tu postura (¡NO MÁS JOROBA!)',
        'name': 'postura_3.mp4',
        'duration': '11:51',
    },

    {
        'id': 'a4',
        'title': 'La rutina diaria de 10 minutos PERFECTA si pasas mucho tiempo sentado (arreglará tu POSTURA)',
        'name': 'postura_4.mp4',
        'duration': '3:59',
    },
    {
        'id': 'a5',
        'title': 'Los PEORES estiramientos para la espalda baja(y qué hacer en lugar de ellos)',
        'name': 'postura_5.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a6',
        'title': 'La rutina PERFECTA de movilidad para restaurar tus articulaciones (según tu tipo de cuerpo)',
        'name': 'postura_6.mp4',
        'duration': '5:33',
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
