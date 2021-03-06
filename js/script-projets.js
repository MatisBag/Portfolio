const darklightmode = localStorage.getItem("darklightmode");

if (darklightmode === "dark")
{
        const body = document.querySelector("body");
    
        toggleDarkLightForElement(body, 'light-mode', 'dark-mode')
    
        const solidBorders = document.querySelectorAll('.solid-border'); 
        
        solidBorders.forEach((solidBorder) => {
            toggleDarkLightForElement(solidBorder, 'light-mode', 'dark-mode')
        })
    
    function toggleDarkLightForElement(elem, lighModeClassname, darkModeClassname) {
            elem.classList.remove(lighModeClassname)
            elem.classList.add(darkModeClassname)
    }
}


// SLIDER

var slideIndex, slides;

slideIndex = 0;
slides = document.getElementsByClassName("imageHolder");
slides[slideIndex].style.opacity = 1;


function plusSlides(n) {
    moveSlide(slideIndex + n);
}

function moveSlide(n) {
    var i;
    var current, next;
    var moveSlideAnimClass = {
        forCurrent: "",
        forNext: ""
    };
    var slideTextAnimClass;
    if (n > slideIndex) {
        if (n >= slides.length) {
            n = 0;
        }
        moveSlideAnimClass.forCurrent = "moveLeftCurrentSlide";
        moveSlideAnimClass.forNext = "moveLeftNextSlide";
    }

    if (n != slideIndex) {
        next = slides[n];
        current = slides[slideIndex];
        for (i = 0; i < slides.length; i++) {
            slides[i].className = "imageHolder";
            slides[i].style.opacity = 0;
        }
        current.classList.add(moveSlideAnimClass.forCurrent);
        next.classList.add(moveSlideAnimClass.forNext);
        slideIndex = n;
    }

}
var timer = null;

function setTimer() {
    timer = setInterval(function () {
        plusSlides(1);
    }, 6000);
}
setTimer();
