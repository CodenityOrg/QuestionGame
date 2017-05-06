var btnmodal = document.getElementById('start__login');
var modalbg = document.getElementById('modal__login');
var modalclose = document.getElementById('modal__close');


btnmodal.addEventListener('click',function(){
    modalbg.classList.toggle('lookmodal');
})

modalclose.addEventListener('click',function(){
    modalbg.classList.toggle('lookmodal');
})