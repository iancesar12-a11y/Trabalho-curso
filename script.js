const container = document.querySelector(".container-cards");

document.querySelector(".direita").addEventListener("click", () => {
    container.scrollLeft += 300;
});

document.querySelector(".esquerda").addEventListener("click", () => {
    container.scrollLeft -= 300;
});