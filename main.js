window.addEventListener('scroll',()=>{
    if(window.pageYOffset>10){
        document.getElementById('nav').style.cssText="background-color :#23262a; box-shadow:5px 5px 3px 3px #24272b";

    }
    else{
        document.getElementById('nav').style.cssText="background-color :black; box-shadow:0 ";
    }
});

function openNav() {
    document.getElementById("navigation").style.width = "210px";
}

function closeNav() {
    document.getElementById("navigation").style.width = "0";
}

// scroll reveal

ScrollReveal({
    distance:'40px',
    duration:2000,
    delay:200,
});
ScrollReveal().reveal('#myIntro1 p, #educationIntro ,.educationRow,.head,.para,.carousel-inner', { origin:'top' });
ScrollReveal().reveal('#myIntro2,#socialMediaIcon p , #socialMediaIcon button, ', { origin:'bottom' });
ScrollReveal().reveal('.right li,.inner1' , { origin:'left' });
ScrollReveal().reveal('#dynamic-txts-head,.inner2' , { origin:'right' });

// typed js

const typed = new Typed('.dynamic-txts',{
    strings: ['a Professional Coder.' , 'an Undergraduate','a Developer.','a Freelancer.'],
    typeSpeed:70,
    backSpeed:70,
    backDelay:1000,
    loop:true,
});