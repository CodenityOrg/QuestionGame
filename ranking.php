<?php

    include 'config/db.php';

    $ranking =  "SELECT name, score FROM users ORDER BY score DESC LIMIT 10";

    $consult = $con->prepare($ranking);
    $consult->execute();

    $ranking = $consult->fetchAll();

 ?>

<!DOCTYPE html>
<html>
  <?php include 'include/head.php'; ?>
  <body>
    <?php include 'include/navbar.php'; ?>
    <style type="text/css">

      .ranking{
        line-height: 0;
      }

      .ranking-item{
          display: flex;
          color: white;
      }
      
      .ranking-content{
          width: 100%;
          background: #0f98c0;
          display: flex;
          border-radius: 5px;
      }

      .ranking-user-name{
        width: 100%;
        font-size: 25px;
        text-align: center;
        line-height: 50px;
        padding-top: 10px;
      }

      .title{
        color:#0f98c0;
      }

      .prize{
        position: absolute;
        width: 25px;
        bottom:  -10px;
        right:   0px;
      }

      .ranking-number p{
          color: #0f98c0;
          line-height: 1.5;
          padding-top: 10px;
          padding-right: 10px;
          font-size: 40px;

      }

      .ranking-profile{
        position: relative;
        height: 50px;
      }

      .ranking-profile .user-profile{
        background: #0284ac;
        padding: 10px;
        border-radius: 5px;
      }

      @media screen and (min-width: 0px) and (max-width: 320px){
        .ranking-number p{
          font-size: 35px;
        }

        .ranking-user-name{
          font-size: 15px;
          line-height: 60px;
        }
      }

      @media screen and (min-width: 320px ) and (max-width: 1000px) {
          .ranking-item{
            margin: 15px 100px;
          }
      }

      @media screen and (min-width: 1000px){

        .ranking-item{
          margin: 15px 100px;
        }
        .title{
          font-size: 60px;
        }


      }



    </style>
    <h1 class="title" align="center">Ranking</h1>
    <div class="ranking">
      <?php foreach($ranking as $key=> $rank): ?>

        <div class="ranking-item">
          <div class="ranking-number">
          <p> <b> <?php echo ($key+1)."."; ?> </b> </p>
          </div>
          <div class="ranking-content">
          <div class="ranking-profile">
            <img width="50" class="user-profile" height="50" src="img/placeholder.jpg">
            <img class="prize" src="img/bronze-medal.svg">
            </div>
            <div class="ranking-user-name">
              <?php echo $rank["name"] ?> - <?php echo $rank["score"] ?> puntos
            </div>          
          </div>
        </div>

      <?php endforeach ?>


      </div>


    </div>

  </body>
</html>