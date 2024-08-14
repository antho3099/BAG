let loop = document.querySelector(".search");
let barre = document.querySelector('.recherche');
console.log(barre);

function displaysearch(){
    console.log("je fonctionne");
    //menu.setAttribute("style", "display:block");
    barre.classList.toggle("display");
}

loop.addEventListener("click", displaysearch);
