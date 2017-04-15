document.addEventListener('DOMContentLoaded',function(){
	FinestraModal1();
});

function FinestraModal1(){
	var finestraModal1 = document.getElementById("finestra-modal1"),
			finestraModalObrir1 = document.getElementById("finestra-modal-obrir1"),
			finestraModalTancar1 = document.getElementById("finestra-modal-tancar1");

	finestraModalObrir1.addEventListener("click",function() {
		finestraModal1.classList.add("js-mostrar1");
	});
	finestraModalTancar1.addEventListener("click",function() {
		finestraModal1.classList.remove("js-mostrar1");
	});
}