<?php // RAY_checkboxes_session.php
error_reporting(E_ALL);
session_start();

// INITIALIZE SOME TEST DATA - THIS MIGHT COME FROM A DATA BASE
if (!isset($_SESSION['box1'])) { $_SESSION['box1'] = false;
}
if (!isset($_SESSION['box2'])) { $_SESSION['box2'] = false;
}
if (!isset($_SESSION['box3'])) { $_SESSION['box3'] = false;
}

// PROCESS THE POST DATA
if (isset($_POST['box1'])) { $_SESSION['box1'] = true;
}
if (isset($_POST['box2'])) { $_SESSION['box2'] = true;
}
if (isset($_POST['box3'])) { $_SESSION['box3'] = true;
}

// CREATE THE FORM
$form = <<<EOFORM
<form method="post">
CHECK OR UNCHECK SOME BOXES HERE<br/>
<input name=box1 type="checkbox" /><br/>
<input name=box2 type="checkbox" /><br/>
<input name=box3 type="checkbox" /><br/>
<input type="submit" value="go" />
</form>
EOFORM;

// REPLACE THE FORM FIELDS TO INDICATE THE CHECKED VALUES IN THE SESSION
if ($_SESSION['box1']) { $form = str_replace('box1', 'box1 checked', $form);
}
if ($_SESSION['box2']) { $form = str_replace('box2', 'box2 checked', $form);
}
if ($_SESSION['box3']) { $form = str_replace('box3', 'box3 checked', $form);
}

// PRESENT THE FORM
echo $form;