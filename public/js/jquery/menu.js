let modal = document.getElementById("menu-modal");
let body = document.getElementById("body");
function openMenu() {
    modal.style.display = "block";
    body.style.right = '0';
    body.style.left = '0';
    body.style.bottom = '0';
}
function closeMenu() {
    body.style.right = '';
    body.style.left = '';
    body.style.bottom = '';
    modal.style.display = "none";
}
window.onclick = function (event) {
    if (event.target == modal) closeMenu();
}