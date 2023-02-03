<?php
session_start();
if(isset($_SESSION['user'])!= 'Admin'){
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Portafolio</title>
</head>
<body>
<div class="container">
<a href="index.php">Inicio</a>
    <a href="briefcase.php">Portafolio</a>
    <a href="close.php">Cerrar</a>
    <br>


    