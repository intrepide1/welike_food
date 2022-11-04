<?php
include("upload.php");
$id = (int)$_GET['id'];

$req = "SELECT * FROM food WHERE id=$id";
$result = mysqli_query($conn, $req);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        div.like {
            position: absoute;
            padding-top: -50px;
            padding-left: 340px;
            cursor: pointer;
            margin-top: -60px;
        }

        .like button {
            background-color: none;
            border: none;
            padding: 1px;
        }

        .like_ {
            height: 60px;
            width: 60px;
            border: 3px solid blue;
            margin-top: -70px;
            margin-left: -65px;
            background-color: #3551EC;
            border-radius: 100px;

        }

        .likee {
            text-decoration: none;
            ;
        }
    </style>
</head>

<body>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="like">
            <a href="" class="btn btn-info btn-lg"><button><img src="images/like.jpg" type="button" alt=""></button>
            </a>
            <div class="like_">
                <a href="javascript:void(0)" class="likee">
                    <span onclick="like_update('<?php echo $id ?>')"> <span style="color:#fff;font-size:40px" id="like_loop_<?php echo $row['id'] ?>"><?php echo $row['like_ctp'] ?></span></span>
                </a>
            </div>
        </div>

    <?php  } ?>
</body>

</html>