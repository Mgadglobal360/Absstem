<?php $this->load->view('frontend/include/header'); ?>
	<section class="contact_map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.4685541916533!2d76.89310151544653!3d28.37491270244383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3e6802f988d3%3A0x2f6e388edd20af19!2sPlot%20No.%20591%2C%204%2C%20Sector%208%2C%20Manesar%2C%20Gurugram%2C%20Haryana%20122051!5e0!3m2!1sen!2sin!4v1655786355857!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	
	<section class="contact_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-xs-12 contact_left">
					<div class="heading">
						<h2>Contact Us</h2>
						<h3 class="layer" data-speed=".7">Connect</h3>
					</div>
					<p>We are here for you. Write to us. Let's start a conversation. For any requirements, doubts, or queries with</p>
					<ul class="contact_list">
						<li>
							<h4><span>Healthcare Applications</span></h4>							
								please write to <a href="#">medo@absstem.com</a>  or call us at <a href="tel:1800 3010 3394">1800 3010 3394</a>
						</li>
						<li>
							<h4><span>Industrial Applications</span></h4>							
								please write to <a href="#">indsales@absstem.com</a>  or call us at <a href="tel:1800 3010 3394">1800 3010 3394</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-6 col-xs-12 contact_right">
					<div class="heading">
						<h2>How can we Help?" </h2>
						<h3 class="layer" data-speed=".7">Get in Touch</h3>
					</div>
					<p>Please fill out this form to tell us what you need. We will get in touch with you at the earliest. </p>
					<form class="row">
						<div class="col-sm-6 form-group">
							<input type="text" class="form-control" placeholder="Your Name*">
						</div>
						<div class="col-sm-6 form-group">
							<input type="email" class="form-control" placeholder="Email  ID*">
						</div>
						<div class="col-sm-6 form-group">
							<input type="text" class="form-control" placeholder="Company Name*">
						</div>
						<div class="col-sm-6 form-group">
							<input type="text" class="form-control" placeholder="Contact No*">
						</div>
						<div class="col-sm-6 form-group">
							<div class="styled_select">
								<select class="form-control">
									<option selected>Select Country</option>
									<option>India</option>
									<option>USA</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 form-group">
							<div class="styled_select">
								<select class="form-control">
									<option selected>Interested In*</option>
									<option>MedO - Medical Oxygen Generator</option>
									<option>Idos - Industrial Oxygen Generator</option>
									<option>Ngen - Industrial Nitrogen Generator</option>
									<option>Spares</option>
									<option>Others</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<textarea class="form-control" placeholder="How can we Help you?*"></textarea>
						</div>
						<div class="col-sm-12 btn-block">
							<button class="btn"><span>Submit</span></button>
						</div>
					</form>
				</div>
				<div class="col-xs-12 faq_block">
					<div class="heading">
						<h2>Frequently asked questions</h2>
						<h3 class="layer" data-speed=".7">FAQs</h3>
					</div>
					<p>Have questions about our products and services?</p>
					<a href="#" class="btn"><span>Read More</span></a>
				</div>
			</div>	
		</div>
	</section>
	
	<section class="location_section">
		<div class="img_block">
			<img src="<?= base_url()?>assets/images/loaction-img.webp" alt="">
		</div>
		<div class="copy_block">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-6">
						<div class="heading">
							<h2>Registered and Corporate Office</h2>
							<h3 class="layer" data-speed=".7">Locations</h3>
						</div>
						<ul class="contact_list">
							<li>
								<h4><span>HeadQuarter</span></h4>								
								Plot No. 591, Sector-8 Phase 4 <br>IMT, Manesar, Gurugram - 122052, India
							</li>
							<li>
								<h4><span>Works</span></h4>							
									Plot #9, Sector 1, DSIIDC Industrial Area <br>Bawana, Delhi - 110039, India
							</li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
	</section>
<?php $this->load->view('frontend/include/footer'); ?>