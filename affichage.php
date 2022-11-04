<?php

require_once "includes/publication.php";

//on ecrit la requete

$sql = "SELECT * FROM 'food' ORDER BY 'datepublication'  DESC";

//on execute la requete
$requete = $bd->query($sql);

//on recupere les données
$articles = $requete->fetchAll();