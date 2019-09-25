<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IHK Prufung Bogen</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style.css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">

	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/core/libraries/jquery_ui/core.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/wizards/form_wizard/form.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/wizards/form_wizard/form_wizard.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/notifications/sweet_alert.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/wizard_form.js"></script>
	<!-- /theme JS files -->

</head>

<body>
<?php

require_once 'conf/config.php';
require_once 'classes/MysqliDb.php';
require_once 'classes/DB.php';



if (isset($_GET['edit'])) {
    $situation = $_GET['edit'];
    $db = new DB(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
    $tab = $db->get(DB_TAB);
    $db->where('situation', $situation, '=');
    $response = $db->getValue(DB_TAB, 'response', sizeof($tab));
    // var_dump($response);
}
?>


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">



			<!-- Main content -->
			<div class="content-wrapper">


                <!-- Page header -->
                <div class="page-header">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Wizards</span> - Form</h4>
                        </div>

                        <div class="heading-elements">
                            <div class="heading-btn-group">
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li><a href="wizards_form.html">Wizards</a></li>
                            <li class="active">Form</li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->




                <!-- Content area -->
				<div class="content">

					<!-- Basic setup -->
		            <div class="panel panel-white">
						<div class="panel-heading">
							<h6 class="panel-title">Situation 1</h6>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
                        <div class="image">
                            <img src="images/questions/situation1.png" alt="" sizes="" srcset="">
                        </div>

	                	<form class="form-basic" action="view/results_check.php" method="post" id="wizard" >
							<fieldset class="step" id="step1">
								<h6 class="form-wizard-title text-semibold">
									<span class="form-wizard-count">1</span>
                                    Frage 1.1
									<small class="display-block">Question1.1</small>
								</h6>

                                <section>
                                    <div class="inner">
                                        <h3>Situation 1</h3>
                                    </div>
                                    <p>Frage 1.1</p>

                                    <div class="image">
                                        <img src="./images/questions/q1-1.png" alt="" sizes="" srcset="">
                                    </div>
                                    <?php

                                    require './questions/q1-1.php';

                                    ?>
                                </section>

							</fieldset>

                            <fieldset class="step" id="step2">
								<h6 class="form-wizard-title text-semibold">
									<span class="form-wizard-count">2</span>
                                    Frage 1.2
									<small class="display-block">Question1.2</small>
								</h6>

                                <section>
                                    <div class="inner">
                                        <h3>Situation 1</h3>
                                    </div>
                                    <p>Frage 1.2</p>

                                    <div class="image">
                                        <img src="./images/questions/q1-2.png" alt="" sizes="" srcset="">
                                    </div>
                                    <?php
                                    require './questions/q1-2.php'
                                    ?>
                                </section>

							</fieldset>

                            <fieldset class="step" id="step3">
								<h6 class="form-wizard-title text-semibold">
									<span class="form-wizard-count">3</span>
                                    Frage 1.3
									<small class="display-block">Question1.3</small>
								</h6>

                                <section>
                                    <div class="inner">
                                        <h3>Situation 3</h3>
                                    </div>
                                    <p>Frage 1.3</p>

                                    <div class="image">
                                        <img src="./images/questions/q1-3.png" alt="" sizes="" srcset="">
                                    </div>
                                    <?php
                                    require './questions/q1-3.php'
                                    ?>
                                </section>

							</fieldset>

                            <fieldset class="step" id="step4">
                                <h6 class="form-wizard-title text-semibold">
                                    <span class="form-wizard-count">4</span>
                                    Your education
                                    <small class="display-block">Let us know about your degree</small>
                                </h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <section>
                                                <div class="inner">
                                                    <h3>Situation 1</h3>
                                                </div>
                                                <p>Frage 1.4</p>

                                                <div class="image">
                                                    <img src="./images/questions/q1-4.png" alt="" sizes="" srcset="">
                                                </div>
                                                <?php
                                                require_once './questions/q1-4.php'
                                                ?>
                                            </section>
                                        </div>

                                </div>
                            </fieldset>






                            <fieldset class="step" id="step5">
                                <h6 class="form-wizard-title text-semibold">
                                    <span class="form-wizard-count">5</span>
                                    Additional info
                                    <small class="display-block">We are almost done now</small>
                                </h6>

                                <div class="row">
                                    <section>
                                        <div class="inner">
                                            <h3>Situation 1</h3>
                                        </div>
                                        <p>Frage 1.14</p>

                                        <div class="image">
                                            <img src="./images/questions/q1-14.png" alt="" sizes="" srcset="">
                                        </div>
                                        <?php
                                        require_once './questions/q1-14.php'
                                        ?>
                                    </section>
                                </div>

                            </fieldset>





								<input class="btn btn-default" id="basic-back" value="Back" type="reset">
                                <input type="hidden" name="situation" value="<?php echo '1'; ?>" formaction="result_check.php" />
                                <input name="submit" type="submit" value="Next"  class="btn btn-info" id="basic-next"  >




                            <div class="form-wizard-actions">

                                <!-- Excluded cus its shifting buttons right-->
							</div>
						</form>
		            </div>
		            <!-- /basic setup -->




				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

<!-- JQUERY -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- JQUERY STEP -->
<script src="js/jquery.steps.js"></script>
<script src="js/main.js"></script>
<!-- Template created and distributed by Colorlib -->
</body>
</html>
