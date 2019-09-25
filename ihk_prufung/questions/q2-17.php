<?php
if (isset($_GET['edit'])) :
    {
        $situation = $_GET['edit'];
        $resp = $response[16];
        $res = explode(';', $resp);
        $q217a = explode(',', $res[0]);
        $q217b = explode(',', $res[1]);
        $q217c = explode(',', $res[2]);

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
                            <input hidden type="text" value="a)" name="q217a[]">
                        </label>
                    </div>
                </td>

                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217a[]"
                                   value="1" <?php echo (in_array('1', $q217a)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217a[]"
                                   value="2" <?php echo (in_array('2', $q217a)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217a[]"
                                   value="3" <?php echo (in_array('3', $q217a)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217a[]"
                                   value="4" <?php echo (in_array('4', $q217a)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217a[]"
                                   value="5" <?php echo (in_array('5', $q217a)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217a[]"
                                   value="6" <?php echo (in_array('6', $q217a)) ? 'checked' : '' ?> >
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
                            <input hidden type="text" value="b)" name="q217b[]">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217b[]"
                                   value="1" <?php echo (in_array('1', $q217b)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217b[]"
                                   value="2" <?php echo (in_array('2', $q217b)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217b[]"
                                   value="3" <?php echo (in_array('3', $q217b)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217b[]"
                                   value="4" <?php echo (in_array('4', $q217b)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217b[]"
                                   value="5" <?php echo (in_array('5', $q217b)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217b[]"
                                   value="6" <?php echo (in_array('6', $q217b)) ? 'checked' : '' ?> >
                            6
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="button" value="c)" name="q217c[]" checked = "checked">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input hidden type="text" value="c)" name="q217c[]">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217c[]"
                                   value="1" <?php echo (in_array('1', $q217c)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217c[]"
                                   value="2" <?php echo (in_array('2', $q217c)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217c[]"
                                   value="3" <?php echo (in_array('3', $q217c)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217c[]"
                                   value="4" <?php echo (in_array('4', $q217c)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217c[]"
                                   value="5" <?php echo (in_array('5', $q217c)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" name="q217c[]"
                                   value="6" <?php echo (in_array('6', $q217c)) ? 'checked' : '' ?> >
                            6
                        </label>
                    </div>
                </td>
            </tr>


            </tbody>
        </table>
    </div>

</div>






























