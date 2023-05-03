var myModal = document.getElementById("myModal");
var modalButton = document.getElementById("modalButton");
var close = document.getElementById("close");
var cancelBtn = document.getElementById("cancelBtn");
modalButton.onclick = function () {
    myModal.style.display = "block";
};
close.onclick = function () {
    myModal.style.display = "none";
};
cancelBtn.onclick = function () {
    myModal.style.display = "none";
};
window.onclick = function (event) {
    if (event.target == myModal) {
        myModal.style.display = "none";
    }
};