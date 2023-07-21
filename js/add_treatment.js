$(document).ready(function() {
    let x = 0;
    let y = 0;
    let lightbox = document.getElementById("myModal");
    let close = document.getElementById("close");
    const add = document.querySelector(".add");


    function createInput(meal) {
        let content = document.createElement("div");
        content.classList.add("content");

        return content;
    }


    function addInput() {
        const index = document.getElementsByClassName('treat').length;
        let meal = document.createElement("div");
        let name = document.createElement("input");
        let btn = document.createElement("a");
        btn.href = "#";
        btn.innerHtml = "&times";
        btn.classList.add = "delete";
        name.type = "text";
        name.classList.add("meal");
        name.name = index + "-meal";
        name.placeholder = "meal";
        meal.appendChild(btn);
        meal.classList.add("treat");
        meal.appendChild(name);
        for (let i = 0; i < 3; i++) {;
            let more = document.createElement("input");
            more.type = "text";
            more.name = index + "-more";
            more.classList.add("more");
            more.placeholder = "meal content";
            meal.appendChild(more)
        }
        document.querySelector(".plan").appendChild(meal);
    }



    function openModal() {
        lightbox.style.display = "block";


    }

    function closeModal() {
        document.getElementById("myModal").style.display = "none";

    }
    document.getElementById("open-lightbox").addEventListener("click", openModal);
    close.addEventListener("click", closeModal);
    add.addEventListener("click", addInput);
})