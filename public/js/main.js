// year diplayer starts

    var d = new Date();
    var year = d.getFullYear();
    var ydisplayer = document.getElementById("yeardisplyer");
    ydisplayer.innerHTML =year;

// year displayer ends

// bread cumb button starts

const breadcumb = document.querySelector(".bread-cumb");

breadcumb.addEventListener('click', ()=>{
    const line1 = document.querySelector(".line1");
    const line2 = document.querySelector(".line2");
    const line3 = document.querySelector(".line3");
    const cover = document.querySelector(".phone-cover");
    const links = document.querySelector(".phone-links");

    line1.classList.toggle("rotate45");
    line2.classList.toggle("dnone");
    line3.classList.toggle("rotate-45");
    cover.classList.toggle("phone-cover-full");
    links.classList.toggle("phone-full-color");
    links.style.display="flex";
});

// bread cumb button ends

// for properties description page
const modelCloser = document.querySelector(".closing-link");

modelCloser.addEventListener('click', ()=>{
    const modelSection = document.querySelector(".model-section");
    modelSection.style.display = "none";
});
{
const modelSection = document.querySelector(".model-section");
const modelImage   = document.querySelector(".model-image");
const images = document.querySelectorAll(".more-img-1 .more-img-img");
const count = images.length;

for (let i = 0; i < count; i++) {
    let element = images[i];
    
    element.addEventListener('click', ()=>{

        modelSection.style.display = "block";
        modelImage.src = element.src;
    });
    
}
}


var slideIndex = 1;

showSlides(slideIndex);

//next/previous controls
function plusSlides(n){
    showSlides(slideIndex += n);
}

//showSlides function

function showSlides(n){
    var i;
    var slides = document.getElementsByClassName("mySliders");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";        
    }
    slides[ slideIndex-1 ].style.display = "block";
}


// 