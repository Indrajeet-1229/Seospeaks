<?php
$pageTitle = "Contact | Seo Comapny In Pune";
include('inc/header.php');
?>




<!-- start page header section -->
<section class="page-header-section bg-pattern">
	<div class="overlay section-padding">
		<div class="container">
			<h1>Get In Touch</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>-</li>
				<li>Contact</li>
			</ul>
		</div><!-- contianer -->
	</div><!-- overlay -->
</section>
<!-- end page header section -->


<!-- start contact section -->
<section class="contact-infos section-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-sm-6 col-12">
				<div class="con-info-item">
					<div class="icon"><img src="assets/images/cont-icon1.png" alt="icon"></div>
					<h5>office Address</h5>
					<p>11, 2nd floor, Pushpa apt.
						above Union Bank, Vanaj Corner,
						Kothrud, Pune - 411038</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-12">
				<div class="con-info-item second">
					<div class="icon"><img src="assets/images/cont-icon2.png" alt="icon"></div>
					<h5>office Phones</h5>
					<p> <a href="tel:+91 8446312333">+91 8446312333</a> <br> <a href="tel+91  8999273644">+91 8999273644</a></p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 col-12">
				<div class="con-info-item third">
					<div class="icon"><img src="assets/images/cont-icon3.png" alt="icon"></div>
					<h5>Email address</h5>
					<p> <a href="mailto:
support@seospeaks.com">
							support@seospeaks.com</a> <br> <a href="mailto:sales@seospeaks.com">sales@seospeaks.com</a></p>
				</div>
			</div>
		</div><!-- row -->
	</div><!-- container -->
</section>
<!-- end contact section -->


<!-- start contact map section -->
<div id="map">

</div>
<!-- end contact map section -->


<!-- staer contact page form section -->
<section class="cont-page-form section-padding">
	<div class="container">
		<div class="section-heading">
			<h2>get in touch</h2>
			<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		</div>
		<form id="contactForm" method="post">
			<div class="row">
				<div class="col-lg-4 col-sm-6 col-12">
					<input type="text" name="name" id="name" placeholder="Full Name" required class="form-control cont-input">
					<!-- <i class="fa fa-user" aria-hidden="true"></i> -->
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<input type="email" name="email" id="email" placeholder="Email Address" class="form-control cont-input" required>
					<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<input type="text" name="website" id="website" placeholder="Your website" class="form-control cont-input" required>
					<!-- <i class="fa fa-dribbble" aria-hidden="true"></i> -->
				</div>
				<div class="col-md-12">
					<textarea rows="5" class="form-control cont-input" placeholder="Enter Message" name="message" id="message"></textarea>
					<!-- <i class="fa fa-paper-plane" aria-hidden="true"></i> -->
				</div>
			</div>
			<div class="input-box captcha">
				<div class="g-recaptcha" style="width: 304px !important; max-width: 304px !important; -ms-transform: scale(0.8, 0.8); margin: 0px; padding: 0px;" data-sitekey="6Le-ZGMpAAAAACKeAW9tYpPCJecqhVZNZSLyIssX"></div>
			</div>

			<div class="col-lg-12 mt-4">
				<button class="btn btn-primary " id="saveButton" type="submit">Submit</button>
			</div>

		</form>
	</div>
</section>
<!-- end contact page form section -->



<!-- Start footer section -->
<?php include 'inc/footer.php'; ?>

<!-- End footer section -->



</div><!-- content push -->
</div><!-- wrapper -->




<!-- All Plugin file  -->
<script src="assets/js/plugins.js"></script>
<!-- <script src="assets/js/function.js"></script> -->



<!-- Include SweetAlert2 JS -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

<!-- captcha script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- javascript -->
<script type="text/javascript">
	$(document).ready(function() {
		$("#saveButton").click(function(e) {
			e.preventDefault();
			var name = $('#name').val();
			var message = $('#message').val();
			var email = $('#email').val();
			var website = $('#website').val();
			var recaptchaResponse = grecaptcha.getResponse();

			var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			//   var mobileRegex = /^\d{10}$/;
			if (name == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Name.',
				});
			}
			//   else if (!mobileRegex.test(mobile)) {
			// 	Swal.fire({
			// 	  icon: 'error',
			// 	  title: 'Invalid Mobile Number',
			// 	  text: 'Please enter a 10-digit mobile number.',
			// 	  showConfirmButton: false,
			// 	  timer: 2000
			// 	});
			// 	$('#mobile').val('');
			// 	return;

			//   }
			else if (email == '') {
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
			} else if (website == '') {
				Swal.fire({
					icon: 'error',
					title: 'Error',
					text: 'Please Enter Your Website URL.',
				});
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
					url: "sendmail.php",
					data: {
						name: name,
						message: message,
						email: email,
						website: website,
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


<!-- Google Map -->
<!-- prettier-ignore -->
<script>
	(g => {
		var h, a, k, p = "The Google Maps JavaScript API",
			c = "google",
			l = "importLibrary",
			q = "__ib__",
			m = document,
			b = window;
		b = b[c] || (b[c] = {});
		var d = b.maps || (b.maps = {}),
			r = new Set,
			e = new URLSearchParams,
			u = () => h || (h = new Promise(async (f, n) => {
				await (a = m.createElement("script"));
				e.set("libraries", [...r] + "");
				for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
				e.set("callback", c + ".maps." + q);
				a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
				d[q] = f;
				a.onerror = () => h = n(Error(p + " could not load."));
				a.nonce = m.querySelector("script[nonce]")?.nonce || "";
				m.head.append(a)
			}));
		d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
	})
	({
		key: "AIzaSyCdAjHRiOjohb_N46LeftEc9Iapsc50JbE",
		v: "weekly"
	});
</script>


<script>
	// Initialize and add the map
	// Initialize and add the map
	let map;

	async function initMap() {
		// The location of Uluru
		const position = {
			lat: 18.50736,
			lng: 73.80755
		};
		// Request needed libraries.
		//@ts-ignore
		const {
			Map
		} = await google.maps.importLibrary("maps");
		const {
			AdvancedMarkerElement
		} = await google.maps.importLibrary("marker");

		// The map, centered at Uluru
		map = new Map(document.getElementById("map"), {
			zoom: 15,
			center: position,
			mapId: "DEMO_MAP_ID",
		});

		// The marker, positioned at Uluru
		const marker = new AdvancedMarkerElement({
			map: map,
			position: position,
			title: "Uluru",
		});
	}

	initMap();
</script>

</body>

</html>