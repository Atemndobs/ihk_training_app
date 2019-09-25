<?php
if (isset($_GET['edit'])) :
    {
        $situation = $_GET['edit'];
        $resp = $response[4];
        $res = explode(';', $resp);
        $q25a = explode(',', $res[0]);
        $q25b = explode(',', $res[1]);
        $q25c = explode(',', $res[2]);

    }
endif;
?>
<div class="inner">
    <div class="form-content">
        <p>Antwort</p>
        <table class="table table-light">
            <tbody>
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="button" value="a)">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input hidden type="text" value="a)" name="q25a[]">
                        </label>
                    </div>
                </td>

                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25a[]"
                                   value="1" <?php echo (in_array('1', $q25a)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25a[]"
                                   value="2" <?php echo (in_array('2', $q25a)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25a[]"
                                   value="3" <?php echo (in_array('3', $q25a)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25a[]"
                                   value="4" <?php echo (in_array('4', $q25a)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25a[]"
                                   value="5" <?php echo (in_array('5', $q25a)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25a[]"
                                   value="6" <?php echo (in_array('6', $q25a)) ? 'checked' : '' ?> >
                            6
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="button" value="b)">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input hidden type="text" value="b)" name="q25b[]">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25b[]"
                                   value="1" <?php echo (in_array('1', $q25b)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25b[]"
                                   value="2" <?php echo (in_array('2', $q25b)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25b[]"
                                   value="3" <?php echo (in_array('3', $q25b)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25b[]"
                                   value="4" <?php echo (in_array('4', $q25b)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25b[]"
                                   value="5" <?php echo (in_array('5', $q25b)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25b[]"
                                   value="6" <?php echo (in_array('6', $q25b)) ? 'checked' : '' ?> >
                            6
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="button" value="c)" name="q25c[]" checked = "checked">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input hidden type="text" value="c)" name="q25c[]">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25c[]"
                                   value="1" <?php echo (in_array('1', $q25c)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25c[]"
                                   value="2" <?php echo (in_array('2', $q25c)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25c[]"
                                   value="3" <?php echo (in_array('3', $q25c)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25c[]"
                                   value="4" <?php echo (in_array('4', $q25c)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25c[]"
                                   value="5" <?php echo (in_array('5', $q25c)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q25c[]"
                                   value="6" <?php echo (in_array('6', $q25c)) ? 'checked' : '' ?> >
                            6
                        </label>
                    </div>
                </td>
            </tr>


            </tbody>
        </table>
    </div>

</div>






























