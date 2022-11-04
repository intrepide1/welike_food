<?php
include("upload.php");

if (isset($_POST['submit'])) {
    $comment = $_POST['comment'];
    $id = $_POST['hide'];

    $res = "INSERT INTO commentaire (id_com, comment) VALUES ('$id', '$comment')";

    if (mysqli_query($conn, $res)) {
        echo "Le commentaire à été enregistré avec succès.";
        header("location:index.php");
    } else {
        echo "Error: " . $res . "<br>" . mysqli_error($conn);
    }
}
