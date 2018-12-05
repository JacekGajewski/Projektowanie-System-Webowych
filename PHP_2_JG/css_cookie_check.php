<?php
$styleChoice = "";
if (!isset($_COOKIE['sitestyle'])){
    $styleChoice = "default";
}else{
    $styleChoice = $_COOKIE['sitestyle'];
}