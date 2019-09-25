<?php
if (isset($_GET['edit'])) :
    {
        $situation = $_GET['edit'];
        $resp= $response[1];
        $res = explode(',', $resp);

    }
endif;
?>
<div class="inner">


    <div class="form-content">

        <p>Antwort</p>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="text" name="q32[]" value=" <?php echo (in_array('1', $res)) ;?> ">

                </label>


            </div>


        </div>


    </div>
</div>
