
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




function fblogin() {
	document.getElementById("fb-login").onclick = function(e) {
		e.preventDefault();
		e.stopPropagation();

		debugger;


		FB.login(function(response){
			FB.api('/me?fields=id,email,first_name,last_name', function(response) {
		      	debugger;
				var data = new FormData(this);
				data.append("facebookId",response.id);
				data.append("name",response.first_name);
				data.append("lastname",response.last_name);
				data.append("email",response.email);
				var xHttp = new XMLHttpRequest();

				xHttp.open("POST","login.php");

				xHttp.onreadystatechange  = function() {
					if (this.readyState == 4 && this.status == 200) {
						location.reload();
				 	}
				}

				xHttp.send(data);
		    });


            location.reload();
	 	});
	}
}




