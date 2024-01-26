<section id="<?php echo $id ?? 0 ?>" class="page-section color  pb-module-section">
	<style>
		.container {
			margin-top: 0;
		}

		.container {
			/* font-family: Open Sans, Arial; */
		}
		.container .breadcrumb-section h1{
			color:white !important;
		}
		.container h1,
		.container h2,
		.container h3,
		.container h4 {
			color: #2a4045;
			line-height: 56px;
			font-weight: 700;
			font-style: normal;
			text-transform: normal;
			letter-spacing: 0px;
			word-spacing: 0px;
		}
		.container h4 {
			line-height: 18px;
		}

		.welcome-section h1 {
			font-size: 50px;
			padding-left: 20px;
		}

		.welcome-section h2 {
			font-size: 30px;
			;
		}

		.welcome-section h3 {
			font-size: 24px;
		}

		.welcome-section h4 {
			font-size: 18px;
		}

		blockquote p {
			color: #5c5c5c;
			font-size: 15px;
			line-height: 1.6;
		}

		blockquote footer {
			color: #5c5c5c;
			font-weight: bolder;
			margin-top: 10px;


		}

		.welcome-section .first-column {
			padding: 0 15px 0 15px;
		}

		.welcome-section .first-column img {
			margin-top: 80px;
			max-width: 100%;
			height: auto;
			vertical-align: top;
		}

		.values li {
			display: flex;
			align-items: start;
		}

		.values li i {
			padding: 5px;
			margin-right: 5px;
			color: goldenrod;
		}

		.values li p {
			font-size: 14px;
			margin: 0;
		}
		.choose-us-section ul li{
			display: flex;
			flex-direction: row;
			margin-top:15px;
		}
		.choose-us-section ul li .icon i{
			color:white;
			font-size: 31px;
			background-color: goldenrod;
			border-radius: 50%;
			padding: 10px;
			margin:0 20px 0 0;
		}
		.choose-us-section  h2{
			margin-bottom: 20px;
		}
		.choose-us-section ul li h4{
			margin-top:0;
		}
		
		
	</style>
	<div class="container">
		<div class="content-main  row">
			<div class="welcome-section">
				<div class="first-column col-md-6">
					<img src="<?php echo asset(config('settings.theme')) ?>/assets/img/preview/team/goldenlease-logo-2-3.png"
						alt="" max-width="100%">
				</div>
				<div class="second-column col-md-6">
					<h1>WELCOME</h1>
					<blockquote class="" style="background-color: transparent; color:black">
						<p>At Golden Lease Rent a Car, we understand the importance of reliable transportation, so we
							offer a wide range of rental vehicles to suit your needs. Our fleet includes economy cars,
							luxury sedans, SUVs, and vans, so you can choose the vehicle that best fits your budget and
							travel plans.</p>

						<p>We pride ourselves on our top-notch customer service and strive to make the rental process
							seamless. From booking to pickup and drop-off, our team is here to assist you every step of
							the way.</p>

						<p>We also offer competitive rates and flexible rental options, including daily, weekly, and
							monthly rentals. We have convenient locations across Dubai and Abu Dhabi, so you can easily
							pick up and drop off your rental car.</p>

						<p>Golden Lease Rent a Car is dedicated to providing you with a hassle-free and enjoyable rental
							experience. Contact us today to reserve your vehicle and explore what our beautiful city
							offers.</p>
						<footer>Golden Lease Rent a Car</footer>
					</blockquote>
				</div>
			</div>
			<div class="values-scetion">
				<div class="first-cloumn col-md-6">
					<h2>Core Values</h2>
					<hr>
					<p>At Golden Lease Rent a Car, our core values guide everything we do and shape the way we interact
						with our customers, employees, and community.</p>

					<ul class="values">
						<li><i class="fa fa-check" aria-hidden="true"></i>
							<p>Customer satisfaction: We are committed to providing exceptional service and meeting the
								needs of our customers.</p>
						</li>
						<li><i class="fa fa-check" aria-hidden="true"></i>
							<p>Quality: We prioritize safety and reliability, and strive to offer the highest quality
								rental vehicles.</p>
						</li>
						<li><i class="fa fa-check" aria-hidden="true"></i>
							<p>Integrity: We conduct ourselves with honesty and transparency, and always act with the
								highest level of professionalism.</p>
						</li>
						<li><i class="fa fa-check" aria-hidden="true"></i>
							<p>Teamwork: We believe that collaboration and cooperation are key to success, and work
								together to achieve our goals.</p>
						</li>
						<li><i class="fa fa-check" aria-hidden="true"></i>
							<p>Responsibility: We are committed to being good stewards of our resources and taking care
								of the environment.</p>
						</li>
					</ul>
					<p>By adhering to these values, we aim to create a positive and enjoyable rental experience for all
						of our customers.</p>
				</div>

			</div>
			<div class="second-column col-md-6">
			</div>
		</div>
		<div class="choose-us-section">
			<h2 class="text-center">WHY CHOOSE US</h2>
			<ul>
				<li class="col-md-6">
					<div class="icon">
						<i class="fa fa-money" aria-hidden="true"></i>
					</div>
					<div class="content">
						<h4>Competitive Rates</h4>
						<p>We offer competitive rates on all of our rentals, so you can be sure you’re getting a great
							deal. We also offer discounted rates for long-term rentals, making it cost-effective for
							customers who need a vehicle for an extended period of time.</p>
					</div>
				</li>
				<li class="col-md-6 ">
					<div class="icon">
						<i class="fa fa-car" aria-hidden="true"></i>
					</div>
					<div class="content">
						<h4>Wide Selection of Vehicles</h4>
						<p>We have a large fleet of vehicles to choose from, including sedans, SUVs, vans, and trucks.
							This means you can find the perfect rental to suit your needs, whether you’re looking for a
							small car for a city trip or a larger vehicle for a family vacation.</p>
					</div>
				</li>
				<li class="col-md-6">
					<div class="icon">
						<i class="fa fa-car" aria-hidden="true"></i>
					</div>
					<div class="content">
						<h4>Reliable and Safe Vehicles</h4>
						<p>We are committed to maintaining the highest standards of safety. All of our
							vehicles are regularly inspected and well-maintained to ensure they are in good working order.</p>
					</div>
				</li>
				<li class="col-md-6">
					<div class="icon">
						<i class="fa fa-road" aria-hidden="true"></i>
					</div>
					<div class="content">
						<h4>Roadside Assistance</h4>
						<p>In the event of a breakdown or other emergency, our team is available 24/7 to provide
							roadside assistance. You can have peace of mind knowing that we have you covered.</p>
					</div>
				</li>
				<li class="col-md-6">
					<div class="icon">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="content">
						<h4>Exceptional Customer Service</h4>
						<p>Our team is dedicated to providing excellent customer service and support. We are available
							to answer any questions you may have and help you choose the right rental vehicle to suit
							your needs.</p>
					</div>
				</li>
				<li class="col-md-6">
					<div class="icon">
						<i class="fa fa-money" aria-hidden="true"></i>
					</div>
					<div class="content">
						<h4>Convenient Rental Options</h4>
						<p>We offer a variety of rental options to make the process as convenient as possible for our
							customers. This includes short-term, long-term, and one-way rentals, as well as airport
							pick-up and drop-off services.</p>
					</div>
				</li>
			<ul>
		</div>
	</div>
	</div>

</section>
<!-- <div class="container">
		<p class="text-center lead edit"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipiscing elit. Morbi fermentum justo vitae convallis varius. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis. Nulla tristique risus ut justo pulvinar mattis. Phasellus aliquet egestas mauris in venenatis.</p>
		<hr class="page-divider">
		<div class="row">
			<div class="col-md-3">
				<div class="thumbnail thumbnail-team no-border no-padding">
					<div class="media">
						<img class="pb-img-edit" src="<//?php echo asset(config('settings.theme')) ?>/assets/img/preview/team/team-270x270x1.jpg" alt="">
					</div>
					<div class="caption">
						<h4 class="caption-title edit ">Standard Name <small>Support team</small></h4>
						<ul class="social-icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<div class="caption-text edit edit">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail thumbnail-team no-border no-padding">
					<div class="media">
						<img class="pb-img-edit" src="<//?php echo asset(config('settings.theme')) ?>/assets/img/preview/team/team-270x270x2.jpg" alt="">
					</div>
					<div class="caption">
						<h4 class="caption-title edit ">Standard Name <small>Support team</small></h4>
						<ul class="social-icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<div class="caption-text edit">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail thumbnail-team no-border no-padding">
					<div class="media">
						<img class="pb-img-edit" src="<//?php echo asset(config('settings.theme')) ?>/assets/img/preview/team/team-270x270x3.jpg" alt="">
					</div>
					<div class="caption">
						<h4 class="caption-title edit">Standard Name <small>Support team</small></h4>
						<ul class="social-icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<div class="caption-text edit">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="thumbnail thumbnail-team no-border no-padding">
					<div class="media">
						<img class="pb-img-edit" src="<//?php echo asset(config('settings.theme')) ?>/assets/img/preview/team/team-270x270x4.jpg" alt="">
					</div>
					<div class="caption">
						<h4 class="caption-title edit">Standard Name <small>Support team</small></h4>
						<ul class="social-icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<div class="caption-text edit">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ullamcorper, quam vel viverra laoreet, nibh libero adipiscing diam, sit amet dictum sem nisi ut sapien.</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row edit">
			<div class="col-md-4 edit ">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis blandit elementum. Nullam volutpat vestibulum molestie. Duis ac sapien consequat, sollicitudin diam vitae, fringilla lectus.</p>
			</div>
			<div class="col-md-4 edit">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis blandit elementum. Nullam volutpat vestibulum molestie. Duis ac sapien consequat, sollicitudin diam vitae, fringilla lectus.</p>
			</div>
			<div class="col-md-4 edit">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sagittis blandit elementum. Nullam volutpat vestibulum molestie. Duis ac sapien consequat, sollicitudin diam vitae, fringilla lectus.</p>
			</div>
		</div>

	</div> -->
