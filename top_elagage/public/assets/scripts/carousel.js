var carouselSlide = document.querySelector('.carousel_slide');
var carouselImages = document.querySelectorAll('.carousel_slide img');

//Buttons

var prevBtn = document.getElementById('prevBtn');
var nextBtn = document.getElementById('nextBtn');

//Compteur
let counter = 1;
let size = carouselImages[0].clientWidth;
carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';


//Fonction associées aux boutons (passage d'une slide à un autre en cliquant sur bouton)
function runSlider(){

    function gotoNextSlide(){
        if(counter >= carouselImages.length -1) return;
        carouselSlide.style.transition = 'transform 0.4s ease-in-out';
        counter++;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }

    function gotoprevSlide(){
        if(counter <= 0) return;
        carouselSlide.style.transition = 'transform 0.4s ease-in-out';
        counter--;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }

    function reset(){
        if(carouselImages[counter].id === 'lastClone'){
            carouselSlide.style.transition = "none";
            counter = carouselImages.length -2;
            carouselSlide.style.transform = 'translateX(' + (- size * counter) + 'px)';
        }
        if(carouselImages[counter].id === 'firstClone'){
            carouselSlide.style.transition = "none";
            counter = carouselImages.length - counter;
            carouselSlide.style.transform = 'translateX(' + (- size * counter) + 'px)';
        }
    }
    nextBtn.addEventListener('click', gotoNextSlide);
    prevBtn.addEventListener('click', gotoprevSlide);
    carouselSlide.addEventListener('transitionend', reset);
}

//Listeners
document.addEventListener('DOMContentLoaded', runSlider);
