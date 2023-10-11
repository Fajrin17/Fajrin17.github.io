var tombol = document.getElementById('toggle-mode');
tombol.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
});

const title = document.getElementById('hero-title');
title.style.color = '#395B64';