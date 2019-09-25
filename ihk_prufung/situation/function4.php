<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IHK Prufung Bogen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.css">

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
if (isset($_GET['edit'])) {

    $situation = $_GET['edit'];
    $db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    $tab = $db->get(DB_TAB);
    $db->where('situation', $situation, '=');
    $response = $db->getValue(DB_TAB, 'response', sizeof($tab));
  //  var_dump($response);
}
?>

<p>Situation</p>

<div class="image">
    <img src="../images/questions/situation4.png" alt="" sizes="" srcset="">
</div>



<div class="wrapper">
        <?php
        require './situation4.php';

        ?>
</div>


<!-- JQUERY -->
<script src="../js/jquery-3.3.1.min.js"></script>

<!-- JQUERY STEP -->
<script src="../js/jquery.steps.js"></script>
<script src="../js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>




</html>


