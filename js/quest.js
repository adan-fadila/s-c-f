$(document).ready(function() {

        function quest() {
            let method = document.getElementById("method");
            let dietQuest = document.querySelectorAll(".quest-diet");
            let sportQuest = document.getElementById("sport-quest");
            if (method.value === "diet") {
                dietQuest.forEach(element => {
                    element.style.display = "block";
                });
                sportQuest.style.display = "none";

            } else {
                dietQuest.forEach(element => {
                    element.style.display = "none";
                });
                sportQuest.style.display = "block";
            }
        }
        method.addEventListener("change", quest);
    }

)