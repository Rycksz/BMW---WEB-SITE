function imgSlider(anything){
    document.querySelector(".bmw01").src = anything;
}
function changeBgColor(color){
    const sec = document.querySelector('.sec');
    sec.style.background = color;
}

//function mudarCorDoTexto() {
   // var texto = document.getElementById("texto");
    //texto.style.color = "red";

//menu responsivo 
function menuShow(){
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "img/menu.png";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "img/close.png";

        }
    }
    