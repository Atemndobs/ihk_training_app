
    <div class="inner">
<?php
if (isset($_GET['edit'])) :
    {
        $situation = $_GET['edit'];
        $resp= $tab[0]['response'];
        $res = explode(',', $resp);
      //  var_dump($res);
    }

endif;
?>
         <div class="form-content">

        <p>Antwort</p>

            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="q11[]" value="1" <?php echo (in_array('1', $res)) ?'checked':'' ?> >
                            1
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q11[]" value="2" <?php echo (in_array('2', $res)) ?'checked':'' ?> >
                            2
                        </label>
                    </div>


                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q11[]" value="3" <?php echo (in_array('3', $res)) ?'checked':'' ?> >
                            3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q11[]" value="4" <?php echo (in_array('4', $res)) ?'checked':'' ?> >
                            4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q11[]" value="5" <?php echo (in_array('5', $res)) ?'checked':'' ?> >
                            5
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q11[]" value="6" <?php echo (in_array('6', $res)) ?'checked':'' ?> >
                            6
                        </label>
                    </div>
                </div>



            </div>
        </div>
