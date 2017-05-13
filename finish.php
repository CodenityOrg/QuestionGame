
<!DOCTYPE html>

<html>
    <link rel="stylesheet" href="css/sad.css">
  <?php include 'include/head.php'; ?>

  <body>
    <div class="conteiner-sad" id="finestra-modal2">
      <div class="info-sad">
        <div class="sad-close" >
          <h1>X</h1>
        </div>

        <p>MAS SUERTE A LA PRÓXIMA CAMPEÓN :(</p>
        <button id="btn-cerrar2" class="sad-btn1">INTENTAR DE NUEVO</button>
        <!-- <button class="sad-btn2">VOLVAMOS AL PRINCIPIO</button> -->
      </div>
    </div>

    <div class="container">
        <?php include 'include/navbar.php';   ?>

        <div class="questionary">
          <form accept-charset="utf-8" id="question-form" method="post" action="verification_answer.php">
            <div>
              <h1 align="center">Haz terminado todas las preguntas ! </h1>
            </div>
            <div class="style-boton">
              <div class="share-fb">
                  <a href="retry.php"><span>Quiero volver a jugar!</span></a>  
              </div>
            </div>
          </form>
        </div>
    </div>

    <button type="button" style="display:none" id="register2" name="button">botono</button>

    <?php include 'include/scripts.php'; ?>

    <script type="text/javascript">
      questionForm();
    </script>

  </body>
  <!-- <script type="text/javascript" scr="js/modalregister.js"></script> -->
  <script type="text/javascript">

    var btnmodal2 = document.getElementById('register2');
    var modalbg2 = document.getElementById('finestra-modal2');
    var modalclose2 = document.getElementById('btn-cerrar2');


    btnmodal2.addEventListener('click',function(){
        modalbg2.classList.toggle('js-mostrar2');

    })

    modalclose2.addEventListener('click',function(){
        modalbg2.classList.toggle('modalclose2');
        location.reload();
    })

  </script>
</html>
