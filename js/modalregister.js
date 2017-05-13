var btnmodal = document.getElementById('register1');
var modalbg = document.getElementById('finestra-modal1');
var modalclose = document.getElementById('btn-cerrar');


btnmodal.addEventListener('click',function(){
    modalbg.classList.toggle('js-mostrar1');

})

modalclose.addEventListener('click',function(){
    modalclose.classList.toggle('modalclose1');
})
//MODAL DESERTOR

var btnmodal2 = document.getElementById('register2');
var modalbg2 = document.getElementById('finestra-modal2');
var modalclose2 = document.getElementById('btn-cerrar2');


btnmodal2.addEventListener('click',function(){
    modalbg2.classList.toggle('js-mostrar1');

})

modalclose2.addEventListener('click',function(){
    modalclose2.classList.toggle('modalclose1');
})
//para mostrar modal register
var btnregister = document.getElementById('open__register');
var modalregister = document.getElementById('bgregister');
var closeregister = document.getElementById('registerclose');

btnregister.addEventListener('click',function(){
    modalregister.classList.toggle('lookregister');
})

closeregister.addEventListener('click',function(){
    modalregister.classList.toggle('lookregister');
})