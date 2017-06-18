var slideIndex=1;
ShowSlide(slideIndex);

function ThemSlide(n) {
    slideIndex+=n;
    ShowSlide(slideIndex);
}

function SlideHienTai(n) {
    slideIndex=n;
    ShowSlide(slideIndex);
}

function ShowSlide(n) {
    var slides =document.getElementsByClassName("slide-item");
    var dots=document.getElementsByClassName("dot");
    if (n<1) {
        slideIndex=slides.length;
    }
    if (n>slides.length) {
        slideIndex=1;
    }
    
    for (var i=0;i<slides.length;i++) {
        slides[i].style.display="none";
    }
    for (var i=0;i<dots.length;i++) {
        dots[i].className=dots[i].className.replace(" active","");
    }
    
    slides[slideIndex-1].style.display="block";
    dots[slideIndex-1].className+=" active";
}

