console.log("coucou");

let imagePrincipale = document.querySelector('.imageprincipale');
console.log(imagePrincipale);
let screenshot = document.querySelectorAll('.small');
console.log(screenshot);

for(let element of screenshot){
    element.addEventListener('click', function(){
        imagePrincipale.src = element.src;
    });
}