const main_video = document.querySelector('.main-video video');
const main_video_title = document.querySelector('.main-video .title');
const video_playlist = document.querySelector('.video-playlist .videos');

let data = [
    {
        'id': 'a1',
        'title': 'Día 1- Aprende a Meditar | Reto de meditación para aprender a meditar paso a paso',
        'name': 'meditacion_1.mp4',
        'duration': '3:16',
    },
    {
        'id': 'a2',
        'title': 'Día 2- Aprende a Meditar | Reto de meditación para aprender a meditar paso a paso',
        'name': 'meditacion_2.mp4',
        'duration': '10:18',
    },
    {
        'id': 'a3',
        'title': 'Día 3- Aprende a Meditar | Reto de meditación para aprender a meditar paso a paso',
        'name': 'meditacion_3.mp4',
        'duration': '11:51',
    },

    {
        'id': 'a4',
        'title': 'Día 4- Aprende a Meditar | Reto de meditación para aprender a meditar paso a paso',
        'name': 'meditacion_4.mp4',
        'duration': '3:59',
    },
    {
        'id': 'a5',
        'title': 'Día 5- Aprende a Meditar | Reto de meditación para aprender a meditar paso a paso',
        'name': 'meditacion_5.mp4',
        'duration': '4:25',
    },
    {
        'id': 'a6',
        'title': 'Día 6- Aprende a Meditar | Reto de meditación para aprender a meditar paso a paso',
        'name': 'meditacion_6.mp4',
        'duration': '5:33',
    },
    {
        'id': 'a7',
        'title': 'Día 7- Aprende a Meditar | Reto de meditación para aprender a meditar paso a paso',
        'name': 'meditacion_7.mp4',
        'duration': '0:29',
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
