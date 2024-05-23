document.getElementById('play-button').addEventListener('click', function() {
    var video = document.getElementById('video');
    var thumbnail = document.getElementById('video-thumbnail');
    var playButton = document.getElementById('play-button');

    thumbnail.style.display = 'none';
    playButton.style.display = 'none';
    video.style.display = 'block';
    video.play();
});