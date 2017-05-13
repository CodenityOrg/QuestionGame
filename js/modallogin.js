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
var btnregister = document.getElementById('open__register');
var modalregister = document.getElementById('bg__register');
var closeregister = document.getElementById('register__close');

btnregister.addEventListener('click',function(){
    modalregister.classList.toggle('mostrar__register');
})

closeregister.addEventListener('click',function(){
    modalregister.classList.toggle('mostrar__register');
})