let like = document.querySelectorAll(".like");
let dislike = document.querySelectorAll(".dislike");
let game = document.querySelectorAll("#jeux li");
console.log();

for (let love of like) {
    love.addEventListener("click", () => {
        love.classList.toggle("greenlight");
        if (love.classList == "greenlight") {
            localStorage.setItem("note", "none");
        }
        else {
            localStorage.setItem("note", "j'aime");
        }
    })
}

for (let hate of dislike) {
    hate.addEventListener("click", () => {
        hate.classList.toggle("red");
        if (hate.classList.toggle == "red") {
            localStorage.setItem("note", "none");
        }
        else {
            localStorage.setItem("note", "j'aime pas");
        }
    })
}




