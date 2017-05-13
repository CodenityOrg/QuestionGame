var btnmodal = document.getElementById('start__login');
var modalbg = document.getElementById('modal__login');
var modalclose = document.getElementById('modal__close');


btnmodal.addEventListener('click',function(){
    modalbg.classList.toggle('lookmodal');
})

modalclose.addEventListener('click',function(){
    modalbg.classList.toggle('lookmodal');
})

//para mostrar modal register
var btnregister = document.getElementById('openregister');
var modalregister = document.getElementById('bgregister');
var closeregister = document.getElementById('registerclose');

btnregister.addEventListener('click',function(){
    modalregister.classList.toggle('lookregister');
})

closeregister.addEventListener('click',function(){
    modalregister.classList.toggle('lookregister');
})