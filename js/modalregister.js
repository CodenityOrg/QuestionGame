var btnmodal = document.getElementById('register1');
var modalbg = document.getElementById('finestra-modal1');
var modalclose = document.getElementById('btn-cerrar');


btnmodal.addEventListener('click',function(){
    modalbg.classList.toggle('js-mostrar1');
    
})

modalclose.addEventListener('click',function(){
    modalclose.classList.toggle('modalclose1');
})