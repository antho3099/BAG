let game = document.querySelectorAll("#jeux li");

for (let g of game) {
    g.addEventListener('click', function () {
        localStorage.setItem("jeu", $jeu["titre"]);
    });
}