<?php
$pageTitle = "Add to cart | Seospeaks";
include('inc/header.php');
?>



<!-- start page header section -->
<section class="page-header-section bg-pattern">
	<div class="overlay section-padding">
		<div class="container">
			<h1>Cart</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li>-</li>
				<li>Single</li>
			</ul>
		</div><!-- contianer -->
	</div><!-- overlay -->
</section>
<!-- end page header section -->


<section class="shop-cart section-padding">
	<div class="container">
		<div class="shop-table table-responsive">
			<table>
				<thead>
					<tr>
						<th colspan="3" class="title">Products</th>
						<th>Price</th>
						<th>Quality</th>
						<th class="total-cart">Total</th>
						<th class="remove-cart">Edit</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="3" class="product-thumbnail">
							<div class="image">
								<a href="#"><img src="assets/images/product/cart_01.jpg" alt="product image" class="img-responsive"></a>
							</div>
							<div class="content">
								<a href="#">Product Title Here</a>
							</div>
						</td>
						<td><span>$250.00</span></td>
						<td class="quantity">
							<a href="#" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<input type="number" value="2" />
							<a href="#" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</td>
						<td class="total-cart"><span>$500.00</span></td>
						<td class="remove-cart">
							<span><i class="fa fa-trash-o" aria-hidden="true"></i></span>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="product-thumbnail">
							<div class="image">
								<a href="#"><img src="assets/images/product/cart_02.jpg" alt="product image" class="img-responsive"></a>
							</div>
							<div class="content">
								<a href="#">Product Title Here</a>
							</div>
						</td>
						<td><span>$250.00</span></td>
						<td class="quantity">
							<a href="#" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<input type="number" value="2" />
							<a href="#" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</td>
						<td class="total-cart"><span>$500.00</span></td>
						<td class="remove-cart">
							<span><i class="fa fa-trash-o" aria-hidden="true"></i></span>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="product-thumbnail">
							<div class="image">
								<a href="#"><img src="assets/images/product/cart_03.jpg" alt="product image" class="img-responsive"></a>
							</div>
							<div class="content">
								<a href="#">Product Title Here</a>
							</div>
						</td>
						<td><span>$250.00</span></td>
						<td class="quantity">
							<a href="#" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<input type="number" value="2" />
							<a href="#" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</td>
						<td class="total-cart"><span>$500.00</span></td>
						<td class="remove-cart">
							<span><i class="fa fa-trash-o" aria-hidden="true"></i></span>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="product-thumbnail">
							<div class="image">
								<a href="#"><img src="assets/images/product/cart_04.jpg" alt="product image" class="img-responsive"></a>
							</div>
							<div class="content">
								<a href="#">Product Title Here</a>
							</div>
						</td>
						<td><span>$250.00</span></td>
						<td class="quantity">
							<a href="#" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<input type="number" value="2" />
							<a href="#" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</td>
						<td class="total-cart"><span>$500.00</span></td>
						<td class="remove-cart">
							<span><i class="fa fa-trash-o" aria-hidden="true"></i></span>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="product-thumbnail">
							<div class="image">
								<a href="#"><img src="assets/images/product/cart_05.jpg" alt="product image" class="img-responsive"></a>
							</div>
							<div class="content">
								<a href="#">Product Title Here</a>
							</div>
						</td>
						<td><span>$250.00</span></td>
						<td class="quantity">
							<a href="#" class="minus"><i class="fa fa-minus" aria-hidden="true"></i></a>
							<input type="number" value="2" />
							<a href="#" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></a>
						</td>
						<td class="total-cart"><span>$500.00</span></td>
						<td class="remove-cart">
							<span><i class="fa fa-trash-o" aria-hidden="true"></i></span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="coupon">
			<div class="cop-left">
				<input type="text" name="coupon" placeholder="Coupon Code...">
				<input type="submit" name="submit" value="Apply Coupon">
			</div>
			<div class="cop-right">
				<input type="submit" name="submit" value="Update Cart">
				<input type="submit" name="submit" value="Process to CheckOut">
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="shipping">
					<h6>Calculate Shipping</h6>

					<select>
						<option>United Kingdom (UK)</option>
						<option>Canada</option>
						<option>Australia</option>
						<option>United States</option>
						<option>Japan</option>
					</select>
					<select>
						<option>State/Country</option>
						<option>California</option>
						<option>Washington</option>
						<option>Texas</option>
						<option>Florida</option>
						<option>Hawaii</option>
					</select>
					<select>
						<option>Postal Code/ Zip</option>
						<option>AL</option>
						<option>AK</option>
						<option>AS</option>
						<option>AZ</option>
						<option>FL</option>
					</select>
					<input type="submit" name="submit" value="Update Cart">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="cart-total">
					<h6>Cart Subtotal</h6>
					<p>Cart Total:<span>$0.00</span></p>
					<p>Shipping and Handling:<span>Free Shipping</span></p>
					<p>Ordar Total:<span>$2940.00</span></p>
				</div><!-- cart-total -->
			</div>
		</div><!-- row -->
	</div><!-- container -->
</section><!-- shop-cart -->


<!-- start newsletter section -->
<section class="newsletter-section bg-pattern">
	<div class="overlay section-padding1">
		<div class="container">
			<div class="newsletter-item">
				<div class="newsletter-thumb">
					<img src="assets/images/signup.png" alt="signup">
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
<?php include 'inc/footer.php'; ?>

<!-- End footer section -->



</div><!-- content push -->
</div><!-- wrapper -->




<!-- All Plugin file  -->
<script src="assets/js/plugins.js"></script>
<script src="assets/js/function.js"></script>


</body>

</html>