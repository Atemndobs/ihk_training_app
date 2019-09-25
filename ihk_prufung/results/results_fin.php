

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>

            <th>Situation</th>
            <th>Total</th>
            <th>Grade</th>


        </tr>
    </thead>
    <?php
    require_once '../conf/config.php';
    require_once '../classes/MysqliDb.php';
    require_once '../classes/DB.php';
    //include_once './results_check.php'

    ?>
    <tbody>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
            try {
                $all_qs = $db->get(DB_TAB);
            } catch (Exception $e) {
            }
            $situation = $db->getValue(DB_TAB, 'situation', 100);
                foreach ($situation as $s => $v){
                if ($v == '1'){
                    $s1[] = $v;
                }
                if ($v == '2'){
                    $s2[] = $v;
                }
                if ($v == '3'){
                    $s3[] = $v;
                }
                if ($v == '4'){
                    $s4[] = $v;
                }

            }

            $imax =  sizeof($all_qs);
            foreach ($all_qs as $all_q => $all){
             // var_dump($all);
                foreach ($all as $key =>$val){
                    if ($key =='question') {
                        // echo  $val .'<br>';
                        $quest[] = $val;
                    }
                    if ($key == 'answer') {
                        $ans[]= $val;
                          //var_dump($val);
                    }
                    if ($key == 'response'){
                        $res[] = $val;
                    }
                    if ($key == 'situation'){
                        $sit[] = $val;
                                     }

                }
            }

                for ($i =0; $i < sizeof($all_qs);$i++ ) {
                    if($ans[$i] === $res[$i] ) {
                        $pass[] = $res[$i];
                    }
                    if($ans[$i] === $res[$i] && $sit[$i] == '1') {
                        $pass1[] = $res[$i];
                    }
                    if($ans[$i] === $res[$i] && $sit[$i] == '2') {
                        $pass2[] = $res[$i];
                    }
                    if($ans[$i] === $res[$i] && $sit[$i] == '3') {
                        $pass3[] = $res[$i];
                    }
                    if($ans[$i] === $res[$i] && $sit[$i] == '4') {
                        $pass4[] = $res[$i];
                    }

                }
                        ?>
                        <tr>
                            <td scope="row">                            <!--situation -->
                                <?php
                                echo 'Situation 1';
                                ?>
                            </td>

                            <td>                                        <!--total -->
                                <?php
                                echo sizeof($pass1).' / '.sizeof($s1);
                                ?>
                            </td>

                            <td>                                            <!-- Answer-->
                                <?php

                               $grade = sizeof($s1)-sizeof($pass1);
                               $grade_percentage = (50/100) * sizeof($s1);


                                if(sizeof($pass1 ) >= $grade_percentage) :
                                    ?>
                                    <button type="button" class="btn btn-success btn-sm">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pass
                                    </button>
                                <?php else:?>
                                    <button type="button" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Fail
                                    </button>
                                <?php endif; ?>

                            </td>
                        </tr>
            <tr>
                <td scope="row">                            <!--situation -->
                    <?php
                    echo 'Situation 2';
                    ?>
                </td>

                <td>                                        <!--total -->
                    <?php
                    echo sizeof($pass2).' / '.sizeof($s2);
                    ?>
                </td>

                <td>                                            <!-- Answer-->
                    <?php

                    $grade = sizeof($s2)-sizeof($pass2);
                    $grade_percentage = (50/100) * sizeof($s2);

                    if(sizeof($pass2) >= $grade_percentage)  :
                        ?>
                        <button type="button" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pass
                        </button>
                    <?php else:?>
                        <button type="button" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Fail
                        </button>
                    <?php endif; ?>

                </td>
            </tr>
            <tr>
                <td scope="row">                            <!--situation -->
                    <?php
                    echo 'Situation 3';
                    ?>
                </td>

                <td>                                        <!--total -->
                    <?php
                    echo sizeof($pass3)  .' / '.sizeof($s3);
                    ?>
                </td>

                <td>                                            <!-- Answer-->
                    <?php

                    $grade = sizeof($s3)-sizeof($pass3);
                    $grade_percentage = (50/100) * sizeof($s3);
                    if(sizeof($pass3) >= $grade_percentage):
                    ?>
                        <button type="button" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pass
                        </button>
                    <?php else:?>
                        <button type="button" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Fail
                        </button>
                    <?php endif; ?>

                </td>
            </tr>
            <tr>
                <td scope="row">                            <!--situation -->
                    <?php
                    echo 'Situation 4';
                    ?>
                </td>

                <td>                                        <!--total -->
                    <?php
                    echo sizeof($pass4) .' / '.sizeof($s4);
                    ?>
                </td>

                <td>                                            <!-- Answer-->
                    <?php

                    $grade = sizeof($s4)-sizeof($pass4);
                    $grade_percentage = (50/100) * sizeof($s4);
                    if(sizeof($pass4) >= $grade_percentage)  :
                        ?>
                        <button type="button" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pass
                        </button>
                    <?php else:?>
                        <button type="button" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Fail
                        </button>
                    <?php endif; ?>

                </td>
            </tr>
            <tr>
                <td scope="row">                            <!--situation -->
                    <?php
                    echo 'TOTAL';
                    ?>
                </td>

                <td>                                        <!--total -->
                    <?php
                    echo sizeof($pass).' / '.sizeof($all_qs);
                    ?>
                </td>

                <td>                                            <!-- Answer-->
                    <?php

                    $grade = sizeof($all_qs)-sizeof($pass);
                    $grade_percentage = (50/100) * sizeof($all_qs);
                    if(sizeof($pass) >= $grade_percentage) :
                    ?>
                        <button type="button" class="btn btn-success btn-sm">
                            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Pass
                        </button>
                    <?php else:?>
                        <button type="button" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Fail
                        </button>
                    <?php endif; ?>

                </td>
            </tr>
                <?php

        }?>    <!-- End php -->
    </tbody>
</table>

    <input type="hidden" name="clean-up" value="

<!--    --><?php
/*    $data = array('response' =>'');
    for ($i =0; $i< $imax; $i++){
        $where = $db->where('question', $quest[$i], '=');
        echo $update = $db->update(DB_TAB, $data, '1');
        echo $count = $i;
    }
    */?>

       "/>

    <input id="send" type="submit" class="btn btn-primary" value="Start over again"  >
<input id="send" type="submit" class="btn btn-warning" value="Detail results"    formaction="final_results.php" />

