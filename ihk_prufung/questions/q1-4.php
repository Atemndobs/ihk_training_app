<?php $resp = $tab[3]['response'];
$res = explode(',', $resp);
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
                                        <input type="radio" name="q14a"
                                               value="a:1" <?php echo (in_array('a:1', $res)) ? 'checked' : '' ?> >
                                        1
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="q14a"
                                               value="a:2" <?php echo (in_array('a:2', $res)) ? 'checked' : '' ?> >
                                        2
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" name="q14a"
                                               value="a:3" <?php echo (in_array('a:3', $res)) ? 'checked' : '' ?> >
                                        3
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
                                <input type="radio" name="q14b" value="b:1" <?php echo (in_array('b:1', $res)) ? 'checked' : '' ?> >
                                1
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14b"
                                       value="b:2" <?php echo (in_array('b:2', $res)) ? 'checked' : '' ?> >
                                2
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14b"
                                       value="b:3" <?php echo (in_array('b:3', $res)) ? 'checked' : '' ?> >
                                3
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
                                <input type="radio" name="q14c" value="c:1" <?php echo (in_array('c:1', $res)) ? 'checked' : '' ?> >
                                1
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14c"
                                       value="c:2" <?php echo (in_array('c:2', $res)) ? 'checked' : '' ?> >
                                2
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14c"
                                       value="c:3" <?php echo (in_array('c:3', $res)) ? 'checked' : '' ?> >
                                3
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
                                <input type="radio" name="q14d" value="d:1" <?php echo (in_array('d:1', $res)) ? 'checked' : '' ?> >
                                1
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14d"
                                       value="d:2" <?php echo (in_array('d:2', $res)) ? 'checked' : '' ?> >
                                2
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14d"
                                       value="d:3" <?php echo (in_array('d:3', $res)) ? 'checked' : '' ?> >
                                3
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="button" value="e">

                            </label>
                        </div>

                    </td>

                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14e" value="e:1" <?php echo (in_array('e:1', $res)) ? 'checked' : '' ?> >
                                1
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14e"
                                       value="e:2" <?php echo (in_array('e:2', $res)) ? 'checked' : '' ?> >
                                2
                            </label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" name="q14e"
                                       value="e:3" <?php echo (in_array('e:3', $res)) ? 'checked' : '' ?> >
                                3
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
