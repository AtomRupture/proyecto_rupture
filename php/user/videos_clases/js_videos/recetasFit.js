const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': '5 Minutos CALENTAMIENTO Cuerpo Completo | Hazlo antes de las pesas',
        'name': 'recetas_1.mp4',
        'duration': '3:16',
    },
    {
        'id': 'a2',
        'title': 'CALENTAMIENTO | Hazlo Antes de las Pesas [ 5 Minutos ]',
        'name': 'recetas_2.mp4',
        'duration': '10:18',
    },
    {
        'id': 'a3',
        'title': 'CALENTAMIENTO - Hazlo antes de las pesas | [ Warm Up ]',
        'name': 'recetas_3.mp4',
        'duration': '11:51',
    },

    {
        'id': 'a4',
        'title': 'ESTIRAMIENTO (para piernas y glúteos) - Hazlo después de las pesas',
        'name': 'recetas_4.mp4',
        'duration': '3:59',
    },
    {
        'id': 'a5',
        'title': 'ESTIRAMIENTO (cuerpo completo) - Hazlo después de las pesas',
        'name': 'recetas_5.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a6',
        'title': 'ESTIRAMIENTO (Tren Superior) - Hazlo Después de las pesas',
        'name': 'recetas_6.mp4',
        'duration': '5:33',
    },
    {
        'id': 'a7',
        'title': 'Estiramiento [ Tren Superior ] | Hazlo después de las pesas',
        'name': 'recetas_7.mp4',
        'duration': '0:29',
    },
    {
        'id': 'a8',
        'title': 'ESTIRAMIENTO CUERPO COMPLETO | Hazlo Después de las Pesas',
        'name': 'recetas_8.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a9',
        'title': 'ESTIRAMIENTO CUERPO COMPLETO | Hazlo Después de las Pesas',
        'name': 'recetas_9.mp4',
        'duration': '1:12',
    },
    {
        'id': 'a19',
        'title': 'ESTIRAMIENTO CUERPO COMPLETO | Hazlo Después de las Pesas',
        'name': 'recetas_10.mp4',
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
