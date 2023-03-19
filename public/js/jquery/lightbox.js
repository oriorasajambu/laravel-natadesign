let modal = document.getElementById("lightShowModal");
let body = document.getElementById("body");
// Open the Modal
function openModal() {
    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    modal.style.display = "block";
    body.style.position = 'fixed';
    body.style.top = `-${scrollY}`;
}

// Close the Modal
function closeModal() {
    const scrollY = document.body.style.top;
    body.style.position = '';
    body.style.top = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    modal.style.display = "none";
}

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("modal-slide");
    if (n > slides.length) slideIndex = 1
    if (n < 1) slideIndex = slides.length
    for (i = 0; i < slides.length; i++) slides[i].style.display = "none";
    slides[slideIndex - 1].style.display = "block";
}

window.onclick = function (event) {
    if (event.target == modal) closeModal();
}

window.addEventListener('scroll', () => {
    document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
});