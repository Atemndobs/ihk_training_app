<?php

echo  'we here'.'<br>';
//var_dump($_GET['edit']);

if (isset($_GET['edit'])) {
    echo 'halo from the other side'.'<br>';
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {


    var_dump($_POST['edit']);
    foreach ($_GET['edit'] as $key => $posted_response){

            $response_array[] = $posted_response;
           var_dump($posted_response);
    }
}


