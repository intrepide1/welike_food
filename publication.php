<?php
$servername = "localhost"; #localhost
$username = "root"; #username of phpmyadmin
$password = ""; #password of phpmyadmin
$dbname = "intrepide_food"; #database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// enregistrement de l'image dans le dossier
if (isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $typepub = $_POST["choix"];
    $message = $_POST["story"];
    $datepub = date("Y/m/d");
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if ($check !== false) {
        echo "c'est bien une image - " . $check["mime"] . ".";
         $uploadOk = 1;
    } else {
        echo "le fichier est different d'une image.";
        $uploadOk = 0;
    }
    // renomer l'image
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    $finaldestination = $target_dir . $newfilename;

    if ($uploadOk == 0) {
        echo "image non enregistré";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "" . $finaldestination)) {

            $sql = "INSERT INTO food (imagepub,titrepub,datepublication,corpsmessage,typepub)
         VALUES('$finaldestination','$nom', '$datepub','$message','$typepub')";
        }
        if (mysqli_query($conn, $sql)) {
            echo "succes";
            header("location:index.php");
        } else {
            echo "error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
