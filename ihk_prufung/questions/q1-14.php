
    <div class="inner">

        <?php  $resp= $tab[13]['response'];
        $res = explode(',', $resp);
        ?>

        <div class="form-content">

        <p>Antwort</p>

            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="q114[]" value="1" <?php echo (in_array('1', $res)) ?'checked':'' ?> >
                        1
                    </label>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q114[]" value="2" <?php echo (in_array('2', $res)) ?'checked':'' ?> >
                            2
                        </label>
                    </div>


                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q114[]" value="3" <?php echo (in_array('3', $res)) ?'checked':'' ?> >
                            3
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q114[]" value="4" <?php echo (in_array('4', $res)) ?'checked':'' ?> >
                            4
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q114[]" value="5" <?php echo (in_array('5', $res)) ?'checked':'' ?> >
                            5
                        </label>
                    </div>
                </div>
                    <div class="form-group">
                        <input type="hidden" name="situation" value="<?php echo '1'; ?>" formaction="result_check.php" />
                        <input name="submit" type="submit" value="Check your Answers"  class="btn btn-info" id="basic-next"  >
                    </div>
                </div>
            </div>
        </div>

