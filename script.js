document.addEventListener("DOMContentLoaded", function() {
    const btns = document.querySelectorAll(".btn");

    btns.forEach(btn => {
        btn.addEventListener("mouseover", function() {
            this.style.transform = "scale(1.1)";
        });

        btn.addEventListener("mouseout", function() {
            this.style.transform = "scale(1)";
        });
    });
});
