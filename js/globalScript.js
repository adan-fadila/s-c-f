$(document).ready(function() {
    let menuToggle = document.querySelector(".menuToggle");
    let navigation = document.querySelector(".navigation");

    function open() {
        navigation.classList.toggle("active");
    };
    menuToggle.addEventListener("click", open);
});