var tombol = document.getElementById('toggle-mode');
tombol.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
});

const title = document.querySelector('.left');
title.style.color = '#FFD1DA';