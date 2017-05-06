
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


		},{scope: 'public_profile,email'});

	}
}

function navResponsive() {
	debugger;
    var x = document.getElementById("myTopnav");
    if (x.className === "nav-options") {
        x.className += " responsive";
    } else {
        x.className = "nav-options";
    }
}

function questionForm() {

	document.getElementById("question-form").addEventListener("submit",function(e) {
      e.preventDefault();
      e.stopPropagation();
			var $this = this;
      var option_id;
      var question_id = Number(document.getElementById("question_id").value);
      var options = document.getElementsByName("option_id");
      for(var i=0;i<options.length;i++)
      {
            if(options[i].checked){
                option_id=Number(options[i].value);
            }

      }
      debugger;
      var data = new FormData();
      data.append('question_id', question_id);
      data.append('option_id', option_id);

			var xHttp = new XMLHttpRequest();
			xHttp.onreadystatechange  = function() {
				if (this.readyState == 4 && this.status == 200) {

            location.reload();
			 	}
        else if (this.readyState == 4 && this.status == 503) {
            //alert("INCORRECTO");
						var btnmodal = document.getElementById('register2');
						btnmodal.click();
            //console.log("INCORRECTO");
        }
			}
      xHttp.open("POST","verification_answer.php");
			//xHttp.setRequestHeader("Content-type", "application/json");
			xHttp.send(data);

	});
}
