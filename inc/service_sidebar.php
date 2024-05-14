<div class="service-sidebar">
	<div class="sr-sidebar-item">
		<h5>Services</h5>
		<ul class="all-serivce">
			<li>
				<a href="<?= $base_url; ?>digital-marketing/digital-marketing-company-pune-india.php"><img src="../assets/images/service/digital.webp" alt="service icon" />
					Digital Marketing</a>
			</li>
			<li>
				<a href="<?= $base_url; ?>digital-marketing/search-engine-optimization-company-pune-india.php"><img src="../assets/images/service/seo.webp" alt="service icon" />
					Search Engine Optimization</a>
			</li>
			<li>
				<a href="<?= $base_url; ?>digital-marketing/social-media-marketing-company-pune-india.php"><img src="../assets/images/service/social-media.webp" alt="service icon" />
					SOCIAL MEDIA MARKETING</a>
			</li>
			<li>
				<a href="<?= $base_url; ?>digital-marketing/google-ads-management-company-pune-india.php"><img src="../assets/images/service/google-adds.webp" alt="service icon" />
					Google Ads Management</a>
			</li>

			<li>
				<a href="<?= $base_url; ?>digital-marketing/email-marketing-company-pune-india.php"><img src="../assets/images/service/email.webp" alt="service icon" />
					Best Email Marketing</a>
			</li>




		</ul>
	</div>
	<div class="sr-sidebar-item">
		<h5>Feel free to talk to us</h5>

		<form class="row g-3 mt-3" id="contactForm" method="post">
			<div class="col-md-12 mb-3 ">
				<input type="text" id="name" name="name" placeholder="Full Name" class="form-control" required>

			</div>

			<div class="col-md-12 mb-3">
				<input type="text" name="mobile" id="mobile" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Phone Number" minlength="10" />
			</div>

			<div class="col-md-12  mb-3">
				<input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>

			</div>

			<div class="col-md-12 mb-3 ">
				<textarea class="form-control" name="message" id="message" placeholder="Your Requirement" required></textarea>
			</div>
			<div class="input-box captcha">
				<div class="g-recaptcha" style="width: 304px !important; max-width: 304px !important; -ms-transform: scale(0.8, 0.8); margin: 0px; padding: 0px;" data-sitekey="6Le-ZGMpAAAAACKeAW9tYpPCJecqhVZNZSLyIssX"></div>
			</div>

			<div class="col-12 mt-4">
				<button class="btn btn-primary " id="saveButton" type="submit">Submit</button>
			</div>


		</form>


	</div>
	<div class="sr-sidebar-item">
		<h5>WHAT CLIENTS SAYS?</h5>
		<div class="sr-testimonial">
			<div class="swiper-container sr-testimonial-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
							"We've been working with seospeaks for several months now, and I can't express enough how impressed we are with the results they've delivered through their SEO services. From the very beginning, their team demonstrated a deep understanding of our industry and our target audience's needs.
							</p>
							<div class="testimonial-content">
								<div class="test-image">
									<img src="../assets/images/testimonial/01.png" alt="client" />
								</div>
								<div class="testimonial-author">
									<h6>Ojas Wadake</h6>
									<p> <a target="_blank" href="https://www.niravbiosolutions.com">Nirav Biosolution</a></p>
								</div>
								<img src="../assets/images/testimonial/test_icon.png" alt="icon" class="test-icon" />
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
							"Our collaboration with seopseaks for our SEO needs has been incredibly rewarding. From the outset, it was evident that their team was dedicated to understanding our unique business challenges and goals.
							</p>
							<div class="testimonial-content">
								<div class="test-image">
									<img src="../assets/images/testimonial/02.png" alt="client" />
								</div>
								<div class="testimonial-author">
									<h6>Akriti Bhatt </h6>
									<p><a target="_blank" href="https://aquachill.co.in/">Aquachill</a></p>
								</div>
								<img src="../assets/images/testimonial/test_icon.png" alt="icon" class="test-icon" />
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
							"Our experience working with seospeaks for our SEO needs has been nothing short of exceptional. From the initial consultation to the ongoing optimization efforts, their team has demonstrated professionalism, expertise, and a genuine commitment to our success.
							</p>
							<div class="testimonial-content">
								<div class="test-image">
									<img src="../assets/images/testimonial/01.png" alt="client" />
								</div>
								<div class="testimonial-author">
									<h6>Rajesh Gugle</h6>
									<p><a target="_blank" href="https://jairajgroup.in/">Jairaj Group</a></p>
								</div>
								<img src="../assets/images/testimonial/test_icon.png" alt="icon" class="test-icon" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
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
			} else if (mobile == '') {
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

			} else if (email == '') {
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
			} else if (message == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Message.',
				});
			} else if (recaptchaResponse === "") {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please complete the reCAPTCHA.',
				});
			} else {

				// Send data to the server using Ajax
				$.ajax({
					type: "POST",
					url: "../send_enquiry.php",
					data: {
						name: name,
						message: message,
						email: email,
						mobile: mobile,
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