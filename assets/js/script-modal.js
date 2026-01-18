document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('videoModal');
    const iframe = document.getElementById('videoFrame');

    modal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const videoUrl = button.getAttribute('data-video');
        iframe.src = videoUrl + '?autoplay=1';
    });

    modal.addEventListener('hidden.bs.modal', function () {
        iframe.src = '';
    });
});
