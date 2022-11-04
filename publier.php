<?php
include("upload.php");
// include('filter.php');
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


        #voirplus {
            position: relative;
            top: 20px;
            width: 98%;
            background-color: white;
            border: 3px #00d226 solid;
            border-radius: 20px;
            color: #000;
            font-size: 30px;
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
<form method="POST" enctype="multipart/form-data" action="publication.php">
    <div class="mb-3 mt-5">
        <label for="nom" class="form-label">Titre de la publication</label>
        <input type="text" class="form-control" name="nom" placeholder="Ex:Les délices de intrepide">
    </div>
    <div class="mb-3 mt-5">
        <select font-weight: bold; name="choix">
            <option selected>Type</option>
            <option>Restaurant</option>
            <option>Recette</option>
            <option>Retour d'expérience</option>
            <option>Conseil</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Image associée (max 60 kb)</label>
        <input class="form-control" type="file" id="formFile" name="file" required>
    </div>
    <div>
        <label for="formFile" class="form-label">Corps du message (500 caractères max)</label>
        <textarea id="story" name="story" cols="45"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Publier</button>
</form>
</div><br>