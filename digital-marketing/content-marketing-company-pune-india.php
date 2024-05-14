<?php
$pageTitle = "Content Writing | Content Marketing agency in Pune";
include('../inc/header.php');
?>


<!-- start page header section -->
<section class="page-header-section bg-pattern">
	<div class="overlay section-padding">
		<div class="container">
			<h1>Content Marketing </h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>-</li>
				<li>Content Marketing</li>
			</ul>
		</div><!-- contianer -->
	</div><!-- overlay -->
</section>
<!-- end page header section -->


<!-- start service section -->
<section class="service-single-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-12">
				<?php include '../inc/service_sidebar.php'; ?>
				<!-- service-sidebar -->
			</div>
			<div class="col-lg-8 col-12">
				<div class="service-single-item">
					<img src="<?= $base_url; ?>assets/images/service/large.jpg" alt="service image">
					<h4>Content Marketing Company in Pune, India</h4>
					<p>Content Marketing is a great way of creating & distributing content for your audience to help boost conversions and engage with them. It is an easy way to attract your customers and encourage them to buy your services or products.</p>
					<p>Seospeaks is a top Content Marketing Company in India that focuses on improving your ROI and Conversions by providing quality Content Marketing Services. We at Seospeaks have a talented and experienced team of content marketers who analyzes your business requirement and provide content based on pure research aligning it with current SEO and SMM guidelines. Our expert team creates premium quality content for all your channels by doing specific keyword research and help you achieve clients and leads from different sources.</p>
					<h4>Features Of Content Marketing</h4>
					<p>
						Content marketing involves creating and distributing valuable, relevant, and consistent content to attract and engage a target audience. Here are the key features and components of content marketing:</p>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="sr-feature">
								<img src="<?= $base_url; ?>assets/images/service/audience-research.webp" alt="service icon">
								<h6>Audience Research</h6>
								<p>Understanding the needs, preferences, pain points, and behaviors of the target audience to create content that resonates with them.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="sr-feature">
								<img src="<?= $base_url; ?>assets/images/service/content-strategy.webp" alt="service icon">
								<h6>Content Strategy</h6>
								<p>Developing a comprehensive plan that outlines goals, target audience, content topics, formats, distribution channels, and performance metrics.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="sr-feature">
								<img src="<?= $base_url; ?>assets/images/service/content-distribution.webp" alt="service icon">
								<h6>Content Distribution</h6>
								<p>Sharing content across various channels to reach and engage the target audience. Distribution channels can include website/blog, social media platforms, email newsletters, industry forums, guest blogging, and content syndication.</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="sr-feature">
								<img src="<?= $base_url; ?>assets/images/service/content-optimization.webp" alt="service icon">
								<h6>Content Optimization</h6>
								<p>Optimizing content for search engines (SEO) to improve its visibility and ranking in search engine results pages (SERPs). This involves keyword research, on-page optimization, and internal linking</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section><!-- /.service-section -->
<!-- end service section -->


<?php include '../inc/pricing_plans.php'; ?>


<!-- start newsletter section -->
<section class="newsletter-section bg-pattern">
	<div class="overlay section-padding1">
		<div class="container">
			<div class="newsletter-item">
				<div class="newsletter-thumb">
					<img src="<?= $base_url; ?>assets/images/signup.png" alt="signup">
				</div><!-- /.newsletter-thumb -->
				<div class="newsletter-content">
					<h2>sign up for</h2>
					<h2>our monthly newsletter</h2>
					<form action="#" method="post">
						<input type="text" name="email" placeholder="your email address*">
						<input class="custom-btn" type="submit" value="subscribe now">
					</form>
				</div><!-- /.newsletter-content -->
			</div><!-- /.newsletter-item -->
		</div><!-- /.container -->
	</div><!-- /.overlay-->
</section><!-- /.newsletter-section section-bg-clr -->
<!-- End newsletter section -->


<!-- Start footer section -->
<?php include '../inc/footer.php'; ?>

<!-- End footer section -->


</div><!-- content push -->
</div><!-- wrapper -->




<!-- All Plugin file  -->
<script src="<?= $base_url; ?>assets/js/plugins.js"></script>
<script src="<?= $base_url; ?>assets/js/function.js"></script>


</body>

</html>