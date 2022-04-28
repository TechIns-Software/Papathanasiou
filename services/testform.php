
<?php
$title = "TEST FORM | G.I.L";
include_once 'serv_header.php';
?>

	<div class="container-contact100">
	
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
			<img src="../assets/img/logo1.png" class="img-fluid "  alt="gillogo">
				<span class="contact100-form-title">
				Private Insurance Questionnaire
				</span>
				<!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div> -->
				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<span class="label-input100">Διεύθυνση ηλεκτρονικού ταχυδρομείου *</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Your Family is:</span>
					<div>
						<select class="selection-2" name="service">
							<option value="It is just me" >It is just me</option>
							<option value="It is me and my partner" >It is me and my partner</option>
							<option value="More than two people with kids" >More than two people with kids</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 input100-select">
					<span class="label-input100">Budget</span>
					<div>
						<select class="selection-2" name="budget">
							<option>Select Budget</option>
							<option>1500 $</option>
							<option>2000 $</option>
							<option>2500 $</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>


</body>

</html>