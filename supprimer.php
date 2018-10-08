<?php
if(isset($_GET['supprimer']))
{
    $supprimer=$_GET['supprimer'];
    rmdir($supprimer);  
    header('Location: index.php');
}
// renommer
if(isset($_GET['executeur']))
{
$nom=$_GET['nom'];
$renom=$_GET['renommer'];
if(!rename("$nom","$renom")){
    echo"
    ce nom n'existe pas";
}

header('Location: index.php');
}
// copier
if(isset($_GET['copy']))
{
$nom=$_GET['nom'];
$copi=$_GET['nom_copy'];
if(!copy("$nom","$copi")){

header('Location: index.php');
}