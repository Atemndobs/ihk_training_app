

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>

            <th>Question</th>
            <th>Your Response</th>
            <th>Grade</th>
          <!--  <th>Answer</th> -->

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


                for ($i =0; $i < sizeof($all_qs);$i++ ) :

                    if($sit[$i] === '1') :
                       // var_dump($sit[$i]);
                        ?>
                        <tr>

                            <td scope="row">                            <!-- Questions -->
                                <?php echo $quest[$i];?>
                            </td>

                            <td>                                        <!-- Response -->
                                <?php

                                echo $res[$i];
                                ?>
                            </td>
                            <td>                                          <!-- Validation / Grade-->
                                <?php
                                if($ans[$i] === $res[$i]) :
                                    ?>
                                      <button type="button" class="btn btn-success btn-sm">
                                          <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> correct
                                      </button>
                                <?php else:?>
                                      <button type="button" class="btn btn-danger btn-sm">
                                          <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> wrong
                                      </button>
                                <?php endif; ?>
                            </td>
                            <td>                                            <!-- Answer-->
                                <?php
                               // echo $ans[$i];
                                ?>
                            </td>
                                 <?php endif; ?>
                                <?php endfor; ?>
                        </tr>
                <?php  }?>    <!-- End php -->
    </tbody>
</table>


