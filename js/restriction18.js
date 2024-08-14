// BALISE D'AVERTISSEMENT
let alert = document.querySelector('.alert');
// TABLEAU DE LIENS
let links = document.querySelectorAll(".jeux .warning");
for(let link of links){
    link.addEventListener("click", function(event){
        event.preventDefault();
        console.log("coucou");
        let age = parseInt(prompt("Merci d'entrer votre âge : "));
        console.log(age);
        // si moins de 18 ans
        if(age < 18){
            alert.style.display = "block";
            alert.innerHTML = "<p>Erreur !!!<br>Tu n'as pas l'âge requis pour voir ce jeu <br> <button>Valider</button></p>";
            let validate = document.querySelector(".alert button");
            validate.addEventListener("click", function(){
                alert.style.display = "none";
        })
        } 
        else if(isNaN(age)){
            alert.style.display = "block";
            alert.innerHTML = "<p>Merci de rentrer un nombre !<button>Valider</button></p>";
            let validate = document.querySelector(".alert button");
                validate.addEventListener("click", function(){
                    alert.style.display = "none";
            })
        }
        else{
            document.location.href = link.href;
        }
    });
};