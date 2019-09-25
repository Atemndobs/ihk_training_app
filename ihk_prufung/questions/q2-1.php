
<div class="inner">
    <?php
    if (isset($_GET['edit'])) :
        {
            $situation = $_GET['edit'];
            $resp= $response[$situation-1];
            $res = explode(',', $resp);
            var_dump($res);
        }

    endif;
    ?>

    <div class="form-content">

        <div class="form-content">

            <p>Antwort</p>

            <div class="form-group">

                <div class="form-check">
                    <label class="form-check-label">
                        <input type="text" name="q21[]" value=" <?php echo $response[0];?>"  placeholder="0.0,00" />

                    </label>
                </div>




            </div>
        </div>

    </div>
