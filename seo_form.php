<div class="contact-form">
	<form  method="post" id="contactForm" class="row">
		<div class="col-lg-4 col-sm-6 col-12">
			<input type="text" name="name" id="name" placeholder="Full Name*" />
		</div>
		<div class="col-lg-4 col-sm-6 col-12">
			<input type="text" name="email" id="email" placeholder="Email*" />
		</div>
		<div class="col-lg-4 col-sm-6 col-12">
			<input type="text" name="mobile" id="mobile" placeholder="Mobile*" />
		</div>
		<div class="col-lg-4 col-sm-6 col-12">
			<input type="text" name="company" id="company" placeholder="Company Name*" />
		</div>
		<div class="col-lg-4 col-sm-6 col-12">
			<input type="text" name="website" id="website" placeholder="Website URL*" />
		</div>
		<div class="col-lg-4 col-sm-6 col-12">
			<input type="text" name="zipcode" id="zipcode" placeholder="zipcode*" />
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<textarea name="massage" id="message" placeholder="Massage"></textarea>
		</div>
		<div class="input-box captcha">
				<div class="g-recaptcha" style="width: 304px !important; max-width: 304px !important; -ms-transform: scale(0.8, 0.8); margin: 0px; padding: 0px;" data-sitekey="6Le-ZGMpAAAAACKeAW9tYpPCJecqhVZNZSLyIssX"></div>
			</div>
		<div class="col-md-12 col-sm-12 col-xs-12 text-center">
		<button class="btn btn-primary " id="saveButton" type="submit">Submit</button>
		</div>
	</form>
</div>


<!-- Include SweetAlert2 JS -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

<!-- Jquery link -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- captcha script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- javascript -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#saveButton").click(function(e) {
			e.preventDefault();
			var name = $('#name').val();
			var mobile = $('#mobile').val();
			var email = $('#email').val();
			var company = $('#company').val();
			var website = $('#website').val();
			var zipcode = $('#zipcode').val();
			var message = $('#message').val();
			var recaptchaResponse = grecaptcha.getResponse();

			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			var mobileRegex = /^\d{10}$/;
			if (name == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Name.',
				});
			}  else if (email == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Email ID.',
				});
			} else if (!emailRegex.test(email)) {
				Swal.fire({
					icon: 'error',
					title: 'Invalid Email',
					text: 'Please enter a valid email address.',
					showConfirmButton: false,
					timer: 2000
				});				
				return;
			}
			else if (mobile == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Mobile Number.',
				});
			} else if (!mobileRegex.test(mobile)) {
				Swal.fire({
					icon: 'error',
					title: 'Invalid Mobile Number',
					text: 'Please enter a 10-digit mobile number.',
					showConfirmButton: false,
					timer: 2000
				});
				$('#mobile').val('');
				return;

			}
			else if (company == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Comapny Name.',
				});
			}
			else if (website == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Website URL.',
				});
			}
			else if (zipcode == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Zipcode.',
				});
			}
			else if (message == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Message.',
				});
			}
			else if (recaptchaResponse === "") {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please complete the reCAPTCHA.',
				});
			}
			 else {

				// Send data to the server using Ajax
				$.ajax({
					type: "POST",
					url: "seo_form_mail.php",
					data: {
						name: name,
						message: message,
						email: email,
						mobile: mobile,
						website: website,
						company: company,
						zipcode: zipcode,
						'g-recaptcha-response': recaptchaResponse

					},
					dataType: "json",
					success: function(response) {
						// Display SweetAlert based on the server response
						if (response.status === "success") {
							Swal.fire({
								icon: 'success',
								title: 'We have received your inquiry!',
								text: response.message,
							});
						} else {
							Swal.fire({
								icon: 'error',
								title: 'Error',
								text: response.message,
							});
						}
						$('#contactForm')[0].reset();
						$('#exampleModal').modal('hide');
					},
					error: function() {
						Swal.fire({
							icon: 'error',
							title: 'Error',
							text: 'An error occurred while processing your request.',
						});
					}
				});

			}

		});
	});
</script>