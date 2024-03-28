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