<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>

<body>

<div class="container">
<form action="../view/results_post.php" method="post" id="check">
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
        <tr>
            <th>Question</th>
            <th>Your Response</th>
        </tr>
        </thead>
        <?php


        require_once '../conf/config.php';
        require_once '../classes/MysqliDb.php';
       require_once '../classes/DB.php';
        echo 'hi';
        ?>
        <tbody>
        <?php

        if (isset($_POST['submit'])) {

            if (empty($_POST['situation'])) {
                echo 'default'. ':'. $_POST['situation'] = '1';
            }






            $db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
            $all_qs = $db->get(DB_TAB);

            $situation_read = $db->getValue(DB_TAB, 'situation', sizeof($all_qs));


            foreach ($situation_read as $s => $v){
                if ($v == 1) {
                    $sit1[] = $v;
                    $situation = '1';
                }
                elseif ($v == 2) {
                    $sit2[] = $v;
                    $situation = '2';
                }
                elseif ($v == 3) {
                    $sit3[] = $v;
                    $situation = 3;
                }
                elseif($v == 4) {
                    $sit4[] = $v;
                    $situation = 4;
                }
            }


            $situation = $_POST['situation'];
            $data = include_once '../conf/data.php';
            $response = $data['response'][$situation-1];

            foreach ($data as $items => $item) {
                if ($items == 'response') {
                    foreach ($item as $key => $value) {
                        $res[] = $value;
                    }
                }
            }



            switch ($situation) {
            case "1":
                $sit = $sit1;
                $num = 1;

                break;

            case "2":

                $sit = $sit2;
                $num = 2;

                break;

            case "3":
                $sit = $sit3;
                $num = 3;
                break;

            case "4":

                $sit = $sit4;
                $num = 4;
                break;

            default:

            }


            $db->where('situation', $num, '=');
            $quest[] = $db->getValue(DB_TAB, 'question', sizeof($sit));


            foreach ($quest[0] as $arr => $q):

                for ($i = 0; $i < sizeof($response); $i++) :

                    if ($i === $arr) :
                        ?>
                        <tr>
                        <td scope="row">
                            <?php echo $q; ?>
                        </td>

                        <td>
                            <?php
                            // if ($items == 'response')
                            {

                                  echo  $result = $response[$i] ;

                                    $data = array(
                                            'response' => $result
                                    );
                                    $where = $db->where('question', $q, '=');
                                    $update = $db->update(DB_TAB, $data);
                                    //echo $db->getLastQuery();
                            /*                    foreach ($res as $key => $value) {
                            $link = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME, DB_PORT);
                            $stmt = mysqli_prepare($link, "UPDATE prufung.t_answers 
                                       SET response = ?
                                       WHERE question = ?");
                            mysqli_stmt_bind_param($stmt, "ss", $res[$i], $quest[$i]);
                            mysqli_stmt_execute($stmt);
                            }*/

                            }

                            ?>
                            <input type="hidden" name="res[]" value="<?php echo $response[$i]; ?>">
                        </td>
                    <?php endif; ?>
                <?php endfor; ?>
                </tr>

            <?php endforeach; ?>
            <?php
         //   var_dump($situation);
        } ?>
        </tbody>
        </table>

    <?php
    if ($situation == 1) : ?>
        <a href="../index.php?edit=<?php echo $situation ?>" class="btn btn-info btn" >
          <span class="glyphicon glyphicon-arrow-left"></span> Back
    </a>
        <input type="hidden" name="situation" value="<?php echo '2'; ?>" formaction="result_check.php" />
        <input id="send" type="submit" class="btn btn-primary" value="Continue to Situation 2"   formaction="../situation/function2.php" />


    <?php endif; ?>
    <?php
    if ($situation == 2) : ?>
        <a href="../situation/function2.php?edit=<?php echo $situation ?>" class="btn btn-info btn" >
            <span class="glyphicon glyphicon-arrow-left"></span> Back
        </a>
        <input type="hidden" name="situation" value="<?php echo '3'; ?>" formaction="result_check.php" />
        <input id="send" type="submit" class="btn btn-primary" value="Continue to Situation 3"   formaction="../situation/function3.php" />
    <?php endif; ?>
    <?php
    if ($situation == 3) : ?>
    <a href="../situation/function3.php?edit=<?php echo $situation ?>" class="btn btn-info btn" >
        <span class="glyphicon glyphicon-arrow-left"></span> Back
    </a>
        <input type="hidden" name="situation"value="<?php echo '4'; ?>" formaction="result_check.php" />
        <input id="send" type="submit" class="btn btn-primary" value="Continue to Situation 4"    formaction="../situation/function4.php" />
    <?php endif; ?>
    <?php
    if ($situation == 4) : ?>
    <a href="../situation/function4.php?edit=<?php echo $situation ?>" class="btn btn-info btn" >
        <span  class="glyphicon glyphicon-arrow-left"></span> Back
    </a>
        <input id="send" type="submit" class="btn btn-primary" value="Your Results"  >
    <?php endif; ?>




</form> 



</div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>