<?php

require_once './conf/config.php';
require_once 'process.php';


echo '--------------------------------------------------'.'<br>';





    $respons = $things['response'];

foreach ($things as $thing=>$rot){
    if ($thing == 'response') {
        foreach ($rot as $key =>$value){
            // echo $value .'<br>';
        }
    }
}




echo '<br>';

require_once './classes/MysqliDb.php';
require_once './classes/DB.php';

$db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT, DB_CHARSET);


$tab = 't_answers';
$col = 'question';
$num = '2';

$data = array(
    'question'=> '2-3',
    'answer' => '5'
);

//$sel = DB::getInstance()->get($tab, $num, $col);
//var_dump($sel);


$r1 = '1';
$r3 = '2';
$r4 ='and';
$r5 ='gone';

$res = array($r1, $r3, $r4, $r5);
foreach ($res as $rrr=> $rr){
    // echo $rr .'<br>';
}
//print_r($res);

$questions = array('1-1', '1-2', '1-3', '1-4', '1-5','1-6', '1-7', '1-8', '1-9', '1-10', '1-11', '1-12', '1-13', '1-14');
$count = array_count_values($questions);

foreach ($questions as $arr => $q){
    // echo $q.'<br>';
}

require_once './conf/config.php';
require_once './classes/MysqliDb.php';
require_once 'classes/DB.php';


$q11 = 'q1.1';
$q12 = 'q1.2';
$q13 = 'q1.3';
$q14 = 'q1.4';
$q15 = 'q1.5';
$q16 = 'q1.6';
$q17 = 'q1.7';
$q18 =  'q1.8';
$q19 = 'q1.9';
$q110 = 'q1.10';
$q111 = 'q.11';
$q112 = 'q1.12';
$q113 = 'q1.13';
$q114 = 'q1.14';

$responses = array($q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19,$q110, $q111, $q112, $q113,$q114);
$count_response = sizeof($responses);


$question11 = '1-1';
$question12 = '1-2';
$question13 = '1-3';
$question14 = '1-4';
$question15 = '1-5';
$question16 = '1-6';
$question17 = '1-7';
$question18 = '1-8';
$question19 = '1-9';
$question110 = '1-10';
$question111= '1-11';
$question112 = '1-12';
$question113 = '1-13';
$question114 = '1-14';

$questions = array('1-1', '1-2', '1-3', '1-4', '1-5','1-6', '1-7', '1-8', '1-9', '1-10', '1-11', '1-12', '1-13', '1-14');


$db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT, DB_CHARSET);

$all_qs = $db->get(DB_TAB);
foreach ($all_qs as $all_q => $all){
    //echo $all_q .'<br>';
    foreach ($all as $key =>$val){
        if ($key ==='question') {
            $questiona[] = $key;

            // echo  $val .'<br>';
        }

    }
}

?>

<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<title>Tester</title>
</head>
<body>

<form action="dum.php" method="post">

<table class="table table-light">
    <tbody>
        <tr>
            <td>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="id[]" id="1" value="2"> Blue
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="id[]" id="2" value="2"> Black
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="id[]" id="3" value="3"> white
                    </label>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<button type="submit" class="btn btn-primary">
<span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Submit
</button>

</form>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>




<?php // RAY_checkboxes_session.php
error_reporting(E_ALL);
session_start();

// INITIALIZE SOME TEST DATA - THIS MIGHT COME FROM A DATA BASE
if (!isset($_SESSION['box1'])) { $_SESSION['box1'] = false;
}
if (!isset($_SESSION['box2'])) { $_SESSION['box2'] = false;
}
if (!isset($_SESSION['box3'])) { $_SESSION['box3'] = false;
}

// PROCESS THE POST DATA
if (isset($_POST['box1'])) { $_SESSION['box1'] = false;
}
if (isset($_POST['box2'])) { $_SESSION['box2'] = false;
}
if (isset($_POST['box3'])) { $_SESSION['box3'] = false;
}

// CREATE THE FORM
$form = <<<EOFORM
<form method="post">
CHECK OR UNCHECK SOME BOXES HERE<br/>
<input name=box1 type="checkbox" /><br/>
<input name=box2 type="checkbox" /><br/>
<input name=box3 type="checkbox" /><br/>
<input type="submit" value="go" />
</form>
EOFORM;

// REPLACE THE FORM FIELDS TO INDICATE THE CHECKED VALUES IN THE SESSION
if ($_SESSION['box1']) { $form = str_replace('box1', 'box1 checked', $form);
}
if ($_SESSION['box2']) { $form = str_replace('box2', 'box2 checked', $form);
}
if ($_SESSION['box3']) { $form = str_replace('box3', 'box3 checked', $form);
}

// PRESENT THE FORM
//echo $form;