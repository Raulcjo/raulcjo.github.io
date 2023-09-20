

const hamburger = document.querySelector(".hamburger");

const nav_list = document.querySelector(".nav-list");

const nav = document.querySelector(".nav");

hamburger.addEventListener("click", () => {nav_list.classList.toggle("xpto")});

hamburger.addEventListener("click", () => {nav.classList.toggle("active")});

function Confirmacao(){
    alert("Sua mensagem foi enviada");
}