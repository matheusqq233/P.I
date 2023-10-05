// Seleciona o botão de rolar para o topo
var scrollToTopBtn = document.querySelector(".scroll-to-top-btn");

// Adiciona um evento de rolagem para mostrar ou ocultar o botão
window.addEventListener("scroll", function() {
    // Verifica a posição da rolagem da página
    if (document.documentElement.scrollTop > 20) {
        // Mostra o botão se a posição da rolagem for maior que 20 pixels
        scrollToTopBtn.style.display = "block";
    } else {
        // Oculta o botão se a posição da rolagem for menor ou igual a 20 pixels
        scrollToTopBtn.style.display = "none";
    }
});

// Função para rolar suavemente para o topo da página
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
