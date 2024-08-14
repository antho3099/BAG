let button = document.querySelector(".menu");
let menu = document.querySelector('.navigation');
let animation = document.querySelector('.bienvenue')
console.log(menu);

function displayDiv(){
    console.log("je fonctionne");
    //menu.setAttribute("style", "display:block");
    menu.classList.toggle("display");
    animation.classList.toggle("animation");
}

button.addEventListener("click", displayDiv);







