<?php
if(isset($_GET['ajout']))
{
    $ajou=$_GET['ajout'];
    @mkdir($ajou);
    header('Location: index.php');

}