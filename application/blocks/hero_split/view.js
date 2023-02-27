    $(function() {
        var windowSize = $(window).width();

        const left = document.querySelector(".left");
        const right = document.querySelector(".right");
        const split = document.querySelectorAll(".split");

        if (windowSize > 799) {
           left.addEventListener("mouseenter", () => {
                for(let i in split){
                    if (split.hasOwnProperty(i)) {
                        split[i].classList.add("hover-left");
                    }
                }
            });

            left.addEventListener("mouseleave", () => {
                for(let i in split){
                    if (split.hasOwnProperty(i)) {
                        split[i].classList.remove("hover-left");
                    }
                }
            });

            right.addEventListener("mouseenter", () => {
                for(let i in split){
                    if (split.hasOwnProperty(i)) {
                        split[i].classList.add("hover-right");
                    }
                }
            });

            right.addEventListener("mouseleave", () => {
                for(let i in split){
                    if (split.hasOwnProperty(i)) {
                        split[i].classList.remove("hover-right");
                    }
                }
            });
        }
    })