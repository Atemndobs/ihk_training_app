<?php
if (isset($_GET['edit'])) :
    {
        $situation = $_GET['edit'];
        $resp= $response[7];
        $res = explode(',', $resp);

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
                            <input type="button" value="a">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48a"
                                   value="a:1" <?php echo (in_array('a:1', $res)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48a"
                                   value="a:2" <?php echo (in_array('a:2', $res)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48a"
                                   value="a:3" <?php echo (in_array('a:3', $res)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48a"
                                   value="a:4" <?php echo (in_array('a:4', $res)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48a"
                                   value="a:5" <?php echo (in_array('a:5', $res)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="button" value="b">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48b" value="b:1" <?php echo (in_array('b:1', $res)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48b"
                                   value="b:2" <?php echo (in_array('b:2', $res)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48b"
                                   value="b:3" <?php echo (in_array('b:3', $res)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48b"
                                   value="b:4" <?php echo (in_array('b:4', $res)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48b"
                                   value="b:5" <?php echo (in_array('b:5', $res)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="button" value="c">
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48c" value="c:1" <?php echo (in_array('c:1', $res)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48c"
                                   value="c:2" <?php echo (in_array('c:2', $res)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48c"
                                   value="c:3" <?php echo (in_array('c:3', $res)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48c"
                                   value="c:4" <?php echo (in_array('c:4', $res)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48c"
                                   value="c:5" <?php echo (in_array('c:5', $res)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>

            </tr>
            <tr>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="button" value="d">

                        </label>
                    </div>
                </td>

                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48d" value="d:1" <?php echo (in_array('d:1', $res)) ? 'checked' : '' ?> >
                            1
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48d"
                                   value="d:2" <?php echo (in_array('d:2', $res)) ? 'checked' : '' ?> >
                            2
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48d"
                                   value="d:3" <?php echo (in_array('d:3', $res)) ? 'checked' : '' ?> >
                            3
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48d"
                                   value="d:4" <?php echo (in_array('d:4', $res)) ? 'checked' : '' ?> >
                            4
                        </label>
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" name="q48d"
                                   value="d:5" <?php echo (in_array('d:5', $res)) ? 'checked' : '' ?> >
                            5
                        </label>
                    </div>
                </td>

            </tr>
            </tbody>
        </table>

        <input type="hidden" name="situation" value="<?php echo '4'; ?>" formaction="results_check.php" />
        <button name="submit" type="submit" class="btn btn-warning">submit</button>
    </div>
</div>