<?php  $resp= $tab[7]['response'];
$res = explode(',', $resp);
?>
    <div class="inner">


        <div class="form-content">

        <p>Antwort</p>



            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="q18[]" value="1" <?php echo (in_array('1', $res)) ?'checked':'' ?> >
                        1
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q18[]" value="2" <?php echo (in_array('2', $res)) ?'checked':'' ?> >
                            2
                        </label>
                    </div>


                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q18[]" value="3" <?php echo (in_array('3', $res)) ?'checked':'' ?> >
                            3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q18[]" value="4" <?php echo (in_array('4', $res)) ?'checked':'' ?> >
                            4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q18[]" value="5" <?php echo (in_array('5', $res)) ?'checked':'' ?> >
                            5
                        </label>
                    </div>

                </div>

            </div>
        </div>
