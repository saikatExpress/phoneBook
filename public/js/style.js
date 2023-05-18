//Typing Script JS start here//
var typed = new Typed(".typing", {
    strings: [
        "Web Desingner",
        "Web Developer",
        "Laravel Developer",
        "JavaScript Developer",
        "Bike Rider",
        "Logic Creator",
    ],
    typeSpeed: 80,
    backSpeed: 80,
});

// Header JS code start from here
const menu = document.querySelector(".myList");
const openBtn = document.getElementById("open-menu-btn");
const closeBtn = document.getElementById("close-menu-btn");

openBtn.addEventListener("click", () => {
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    openBtn.style.display = "none";
});

const closeNav = () => {
    menu.style.display = "none";
    closeBtn.style.display = "none";
    openBtn.style.display = "inline-block";
};

closeBtn.addEventListener("click", closeNav);
// Header JS code end from here

var myModal = document.getElementById("myModal");
var modalButton = document.getElementById("modalButton");
var close = document.getElementById("close");

modalButton.onclick = function () {
    myModal.style.display = "block";
};

close.onclick = function () {
    myModal.style.display = "none";
};

window.onclick = function (event) {
    if (event.target == myModal) {
        myModal.style.display = "none";
    }
};
