<?php
if (isset($_GET['edit'])) :
    {
        $situation = $_GET['edit'];
        $resp= $response[6];
    }
endif;
?>
<div class="inner">


    <div class="form-content">

        <p>Antwort</p>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="text" name="q47[]" value="<?php echo $resp;?>"  >
                </label>
            </div>
        </div>
    </div>
</div>




