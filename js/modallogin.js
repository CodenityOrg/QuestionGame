var btnmodal = document.getElementById('start__login');
var modalbg = document.getElementById('modal__login');
var modalclose = document.getElementById('modal__close');

//para mostrar modal register
var modalregister = document.getElementById('bgregister');
var closeregister = document.getElementById('registerclose');

btnmodal.addEventListener('click',function(){
    modalbg.classList.toggle('looklogin');
})

modalclose.addEventListener('click',function(){
    modalbg.classList.toggle('looklogin');
});

//para registro

var btnsRegister = document.getElementsByClassName("open-register-modal");

for (var i = 0,btnRegister; btnRegister = btnsRegister[i]; i++) {
	btnRegister.onclick = function(e) {
		e.preventDefault();
	    modalregister.classList.toggle('lookregister');
	}
}


closeregister.addEventListener('click',function(){
    modalregister.classList.toggle('lookregister');
})