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
        div.dislike {
            position: absolute;
            padding-top: -10px;
            margin-left: 400px;
            cursor: pointer;
            margin-top: -62px;

        }


        .dislike button {
            background-color: none;
            border: none;
            padding: 1px;
            margin-top: 5px;
            margin-left: 9px;
        }



        .dislike_ {
            height: 60px;
            width: 60px;
            border: 3PX solid red;
            margin-bottom: -150px;
            margin-left: 73px;
            background-color: red;
            border-radius: 200px;
            margin-top: -70px;
        }

        .dislikee {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>

        </div>
        <div class="dislike">
            <a href="" class="btn btn-info btn-lg"><button><img src=" images/dislike.jpg" type="button" alt=""></button>
            </a>
            <div class="dislike_">
                <a href="javascript:void(0)" class="dislikee">
                    <span onclick="dislike_update(<?php echo $id ?>)"> <span style="color:#fff;font-size:40px" id="dislike_loop_<?php echo $row['id'] ?>"><?php echo $row['dislike_ctp'] ?></span></span>
                </a>
            </div>
        </div>
    <?php  } ?>
</body>