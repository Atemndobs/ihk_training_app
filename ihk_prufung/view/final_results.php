<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IHK Prufung Bogen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">


    <!-- STYLE CSS -->
    <style>

    </style>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
require_once '../conf/config.php';
require_once '../classes/MysqliDb.php';
require_once '../classes/DB.php';

?>

<form action="../ind.php" method="post" id="wizard">
<div class="form-control">
        <?php
        require '../results/final.php';
        ?>
</div>


<!-- JQUERY --><script src="../js/jquery-3.3.1.min.js"></script>

<!-- JQUERY STEP -->
<script src="../js/jquery.steps.js"></script>
<script src="../js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>




