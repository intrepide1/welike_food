<?php
include('upload.php');
$id = $_GET['id'];
$sqlcom = "SELECT * from food WHERE id =$id";
$rescom = mysqli_query($conn, $sqlcom);
?>
<!DOCTYPE html>
<html>

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
    <style>
        div.commen input {
            border-color: blue;
            display: flex;
            padding-left: 320px;
            padding-top: 40px;
            padding-bottom: 40px;
            padding-right: 260px;
            margin-top: 80px;
            border-radius: 10px;
            margin-left: 290px;
        }
    </style>
</head>

<body>
    <div>
        <?php while ($row = mysqli_fetch_assoc($rescom)) { ?>
            <form method="POST" action="validcom.php">
                <div class="commen">
                    <input type="text" name="comment" id="" placeholder="Commentaire....." classe="comment">
                    <input type="hidden" name="hide" id="" value="<?php echo $id ?>">
                </div>
                <div class="envoie">
                    <button type="submit" name="submit"> <img src="images/bouton.png" alt="bouton"></button>
            </form>
    </div>
<?php } ?>
</body>

</html>
<?php
?>