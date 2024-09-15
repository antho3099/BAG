let like = document.querySelectorAll(".like");
let dislike = document.querySelectorAll(".dislike");
let game = document.querySelectorAll("#jeux li");
console.log();

for (l of like) {
    l.addEventListener("click", function () {
        l.style.backgroundColor = "green";
        localStorage.setItem("votre note", "like");
    })
}
for (dl of dislike) {
    dl.addEventListener("click", function () {
        dl.style.backgroundColor = "red";
        localStorage.setItem("votre note", "dislike");
    })
}

if (l && dl.click) {
    l.style.backgroundColor = "gold";
    dl.style.backgroundColor = "gold";
    localStorage.setItem("votre note", "none");
}
else {

}


