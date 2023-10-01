
window.addEventListener("scroll", function(){
    let header = document.querySelector('#header')
    header.classList.toggle('rolagem',window.scrollY > 0)
})
document.getElementById("botao").addEventListener("click", function() {
    window.location.href = "https://wa.me/5519997711979";
});