<?php
include("upload.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_css.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>

    <style>
        div.para {
            text-align: center;
            margin-right: 500px;
            margin-top: 30px;
        }

        div.taille img {
            padding: 60px;
            margin: 70px;
            width: 200px;
            height: 150px;
            text-align: center;
            margin-top: 20px;
            border-style: solid;
            border-color: green;
            border-width: 2px;
            border-radius: 30px;
            margin-left: 250px;
        }

        div.titr {
            width: 420px;
            height: 270px;

            margin-left: 600px;
            margin-top: -350px;
            text-align: center;
            font-size: #3551EC;
            font-size: 25px;


        }

        div.envoie img {

            margin: 10px;
            position: absolute;
            margin-left: 1040px;
            margin-top: -120px;
            background-color: #fff;
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

    </div><br>

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
            <select style="border-style: none;font-weight: bold;">
                <option selected>Type</option>
                <option>Restaurant</option>
                <option>Recette</option>
                <option>Retour d'exprience</option>
                <option>Conseil</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;Filtre<img style="margin-bottom: -7px;" src="images/filtre.png">
        </div>
    </div>
    <!--fin div de la 2eme ligne-->

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

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <div>
        <?php
        $id = (int)$_GET['id'];

        $req = "SELECT * FROM food WHERE id=$id";
        $result = mysqli_query($conn, $req);
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
            <div>
                <div class="para">
                    <p>
                    <h1 style="color:#008518;"><?= $row['typepub']; ?></h1>
                    </p>
                </div>
                <div class="taille">

                    <img src="<?php echo $row['imagepub'] ?>" alt="">
                </div>

                <div>
                    <div class="titr">
                        <h3><?= $row['titrepub'] ?></h3>
                        <br>
                        <span style="color:#000000"><?= $row['corpsmessage'] ?></span>
                        <br><br>
                        <span style="color:#596CE5">Publié le :<?= $row['datepublication'] ?></span>
                    </div>
                </div>
                <?php
                include("like.php");
                ?>
                <span><?php
                        include("dislike.php");
                        ?></span>
                <?php
                include("commentaire.php")
                ?>
            </div>
    </div>

<?php
        }
?>

</body>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
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


    function like_update(id) {
        jQuery.ajax({
            url: 'update_count.php',
            type: 'post',
            data: 'type=like&id=' + id,
            success: function(result) {
                var current_count = jQuery('#like_loop_' + id).html();
                current_count++;
                jQuery('#like_loop_' + id).html(current_count);

            }
        });
    }

    function dislike_update(id) {
        jQuery.ajax({
            url: 'update_count.php',
            type: 'post',
            data: 'type=dislike&id=' + id,
            success: function(result) {
                var current_count = jQuery('#dislike_loop_' + id).html();
                current_count++;
                jQuery('#dislike_loop_' + id).html(current_count);

            }
        });
    }
</script>

</html>