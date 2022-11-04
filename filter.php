<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("upload.php");
    if (isset($_POST['request'])) {
        $request = $_POST['request'];
        $req1 = "SELECT*FROM food WHERE typepub='$request'";
        $result = mysqli_query($conn, $req1);
        $count = mysqli_num_rows($result);

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
        }
    }
    ?>
</body>

</html>

<script>
    $(document).ready(function() {
        $('.gallery').slice(0, 10).show()
        $('.btn').on('click', function() {
            $('.gallery:hidden').slice(0, 10).slideDown('show')
            if ($('.gallery:hidden').length == 0) {
                $(this).text('Il y a plus d\'images à afficher');
            }
            return false;
        });
    });
</script>