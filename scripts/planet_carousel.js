let slideIndex = 1;

showSlides(slideIndex);   

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("carousel-element");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "flex";
    setTimeout(showSlides, 4000); 
}