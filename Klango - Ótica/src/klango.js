document.addEventListener("DOMContentLoaded", function() {
    var currentImageIndex = 0;
    var images = document.querySelectorAll('.banner-img');

    function ExibirImagem(index) {
        images.forEach(function(image) {
            image.classList.remove('ativar');
        });
        images[index].classList.add('ativar');
    }

    function nextImage() {
        currentImageIndex = (currentImageIndex + 1) % images.length;
        ExibirImagem(currentImageIndex);
    }

    ExibirImagem(currentImageIndex);

    setInterval(nextImage, 3000);
});
