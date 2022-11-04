<?php
$con = mysqli_connect('localhost', 'root', '', 'intrepide_food');
$type = $_POST['type'];
$id = $_POST['id'];
if ($type == 'like') {
	$sql = "update food  set like_ctp=like_ctp+1 where id=$id";
} else {
	$sql = "update food set dislike_ctp=dislike_ctp+1 where id=$id";
}
$res = mysqli_query($con, $sql);
