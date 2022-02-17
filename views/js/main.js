
var slideIndex = [];
const containersSlides = document.querySelectorAll('.ContainerSlide');
if(containersSlides){
    containersSlides.forEach(function(container){
        slideIndex[container.id] = 1;
        showSlides(slideIndex[container.id], container);
    })
}
console.log(containersSlides);



function plusSlides(n) {
    console.log(event.target);
    const carousel = event.target.closest('.ContainerSlide');
    console.log(carousel);
    showSlides(slideIndex[carousel.id] += n, carousel);
}

function showSlides(n, carousel) {
    let i;
    const slides = carousel.getElementsByClassName("mySlides");
    if (n > slides.length) {slideIndex[carousel.id] = 1}
    if (n < 1) {slideIndex[carousel.id] = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex[carousel.id]-1].style.display = "block";
}