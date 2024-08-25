let six = document.querySelector('#sixteen');
let three = document.querySelector('#three');
let twelve = document.querySelector('#twelve');
let eighteen = document.querySelector('#eighteen');
let seven = document.querySelector('#seven');

let game18 = document.querySelector('#jeux .warning');
let game16 = document.querySelector('#jeux .hard');
let game12 = document.querySelector('#jeux .fine');
let game7 = document.querySelector('#jeux .light');
let game3 = document.querySelector('#jeux .kid');

eighteen.addEventListener("click", function () {
    game16.style.display = "none";
    game12.style.display = "none";
    game7.style.display = "none";
    game3.style.display = "none";
})


