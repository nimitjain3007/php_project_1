let currentSlide = 1;
const slides = document.querySelector('.projects-slides');
const totalSlides = document.querySelectorAll('.projects-slide').length;
const slideWidth = document.querySelector('.projects-slide').offsetWidth;

function showSlide(index) {
    slides.style.transition = 'transform 0.5s ease-in-out';
    slides.style.transform = `translateX(-${index * slideWidth}px)`;
    currentSlide = index;
    
    if (index === totalSlides - 1) {
        setTimeout(() => {
            slides.style.transition = 'none';
            slides.style.transform = `translateX(-${slideWidth}px)`;
            currentSlide = 1;
        }, 500);
    } else if (index === 0) {
        setTimeout(() => {
            slides.style.transition = 'none';
            slides.style.transform = `translateX(-${(totalSlides - 2) * slideWidth}px)`;
            currentSlide = totalSlides - 2;
        }, 500);
    }
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

// Initialize slider position
showSlide(currentSlide);

// Auto-slide every 3 seconds
setInterval(nextSlide, 3000);
