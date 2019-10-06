<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IHK Prufung Bogen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- STYLE CSS -->

</head>
<?php
require_once '../conf/config.php';
require_once '../classes/MysqliDb.php';
require_once '../classes/DB.php';


$situation = $_POST['situation'];
//var_dump($situation);
if (isset($_GET['edit'])) {
    $situation = $_GET['edit'];
    $db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    $tab = $db->get(DB_TAB);
    $db->where('situation', $situation, '=');
    $response = $db->getValue(DB_TAB, 'response', sizeof($tab));
    // var_dump($response);
}

?>
<body>


<p>Situation 2 </p>



<div class="wrapper">
        <?php
        require './situation2.php';
        //include './situation2.php';
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


