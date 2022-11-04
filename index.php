<?php
include("upload.php");
?>
<?php
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>we like food</title>
  <link rel="stylesheet" type="text/css" href="style_css.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link href="https://netdna.bootstrapcdn.com/boostrap/3.0.0/css/boostrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!-- voir plus -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <style>
    div.gallery {
      border: 1px solid #ccc;
      float: left;
      width: 255px;
      border-radius: 10px;
      display: block;
      margin: 5px;
    }

    div.gallery img {
      width: 253px;
      height: 230px;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      display: inline-block;

    }

    div.desc {
      padding: 5px;
      text-align: center;
      width: 250px;
      height: 60PX;
      margin-bottom: 10px;
      margin-right: 80px;
      box-sizing: content-box;

    }

    div.gallery:hover {
      opacity: 1;
      box-shadow: 1px 2px 8px lightgray;
    }

    div.gallery:hover .overlay {
      opacity: 0.8;
      box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);
      width: 254px;
      margin-left: -0.8px;
    }

    /* texte dans image */
    .overlay {
      margin-left: 20px;
      margin-right: 20px;
      opacity: 0;
      transition: .5s ease;
      color: white;
      vertical-align: text-bottom;
      font-size: 11px;
      margin-top: -50px;
      position: absolute;
      text-align: center;
    }




    #commentaire {
      background: #f2f2f2;
      border: 1px solid #999;
      bottom: 0;
      color: #36b;
      cursor: pointer;
      display: block;
      height: 28px;
      line-height: 28px;
      min-width: 110px;
      padding: 5px;
      position: fixed;
      right: 20px;
      text-align: center;
      z-index: 4;
      font-family: 'Roboto', Helvetica, Sans-Serif;
      font-size: 13px;


    }


    /*caroussel*/
    .swiper {
      width: 100%;
      height: 20%;
    }

    .swiper-slide {

      font-size: 18px;
      background: #fff;
      margin: 5px;
      padding: 10px;
      display: flex;
      border-radius: 50px;
      border: 0.5px solid skyblue;
      width: 170px;
      height: 55px;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }


    /*fin caroussel*/

    .div_text_scroll {
      font-size: 13px;
      width: 100px;
      height: 50px;
      margin-left: 6px;
      margin-bottom: -8px;
    }

    .img_scroll {

      width: 50px;
      height: 40px;
      border-radius: 55%;
      margin-left: 0;
    }

    head {
      min-width: 1000px;
    }

    body {
      min-width: 1000px;

    }
  </style>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1/.min.js"></script> -->
</head>

<body>

  &nbsp;
  <div style="display: flex;align-items: center;">
    &nbsp;&nbsp;&nbsp;<img width="70" height="30" src="images/logo.png">
    <input id="rech" type="text" name="rech">
    <img style="margin-left: -110px;margin-bottom: -5px;" src="images/micro.png">
    <img style="margin-left: 2px;margin-bottom: -5px;" src="images/camera.png">
    <img style="margin-left: 3px;margin-bottom: -4px;" src="images/loupe.png">
    <input type="button" name="connexion" id="connexion" value="connexion">
    &nbsp;<img style="margin-bottom: -5px;" src="images/parametre.png">
    <?php
    include("publier.php");
    ?>

    <!--div de la 2eme ligne-->
    <div style="display: flex;align-items: center;">

      <div style="display: flex;align-items: center;">
        <nav>
          <a id="tout" href="#">TOUT</a>
          <a id="actu" href="#">ACTUALITES</a>
          <a id="imag" href="#">IMAGES</a>
          <a id="videos" href="#">VIDEOS</a>
          <a id="cartes" href="#">CARTES</a>
          <div class="animation start-home"></div>
        </nav>
      </div>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <div style="display: flex;align-items: center;">
        Filtre adulte: &nbsp;
        <?php
        include("filter_image.php");
        ?>

        &nbsp;&nbsp;&nbsp;&nbsp;Filtre<img style="margin-bottom: -7px;" src="images/filtre.png">
      </div>
    </div>


    <!--trait de separation-->

    <div>
      <hr style="margin-bottom: 10px;margin-top: 1px;">
    </div>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php
        $req = "SELECT*FROM food ORDER BY id DESC";
        $result = mysqli_query($conn, $req);

        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) { ?>

            <div class="swiper-slide">
              <img class="img_scroll" src="<?= $row['imagepub'] ?>" alt="image">
              <div class="div_text_scroll"><?= $row['titrepub'] ?>
                <br> <b><?= $row['typepub'] ?></b>
              </div>

            </div>&nbsp;&nbsp;
        <?php
          }
        }
        ?>
      </div>

      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; color: black; background-color: white;font-weight: bold;margin-top: -40px;margin-right: 0;">
      </div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px;color: black; background-color: white;font-weight: bold;margin-top: -40px;"></div>
      <!--<div class="swiper-pagination"></div>-->
    </div>

    <!--galerie image-->
    <div class="amg_car">
      <div style="align-items: center;" id="all">
        <?php
        $req = "SELECT*FROM food ORDER BY id DESC";
        $result = mysqli_query($conn, $req);
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {

            echo '
           <div class="gallery" style="display:none;">
          <a  target="_blank" style="color:black" href="reception.php?id=' . $row['id'] . '">
            <img src="' . $row['imagepub'] . '" alt="" srcset="">
            <div class="overlay">
              <h5>300 x 250 - jpg<br>maximumwall.com</h5>
            </div>
            <div class="desc">' . $row['corpsmessage'] . '<br>
            publié le:' . $row['datepublication'] . '</div>
             </a>
            </div>';

        ?>
        <?php
            $lastid = $row['id'];
          }
        }
        ?>
        <?php
        include("voirplus.php");
        ?>

        <!--commentaire-->
        <div class="commentaire" id="commentaire">
          <a style="margin-top: 5px;" href="#">
            <img style="float: left;border: 0;
    height: 14px;
    margin: 0 5px -4px 0;
    width: 14px;
    display: inline;
    margin-top: 8px;
    " src="images/commentaire.jpg">
            <div>commentaire</Kdiv>
          </a>
        </div>
        <!--fin commentaire-->

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript">
          //function voir plus
          $(document).ready(function() {
            $('.gallery').slice(0, 10).show()
            $('.voirplus').on('click', function() {
              $('.gallery:hidden').slice(0, 10).slideDown('show')
              if ($('.gallery:hidden').length == 0) {
                $(this).text('Il y a plus d\'images à afficher');
              }
              return false;
            });
          });

          //java_swipper
          var swiper = new Swiper(".mySwiper", {
            slidesPerView: 12,
            spaceBetween: 2,
            slidesPerGroup: 12,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
          });
        </script>
</body>

</html>