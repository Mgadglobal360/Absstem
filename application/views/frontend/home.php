<?php $this->load->view('frontend/include/header'); ?>
<section class="banner_section">
	<picture>
        <source srcset="<?= base_url()?>assets/images/banner.webp" media="(min-width:1023px)">
        <source srcset="<?= base_url()?>assets/images/banner-mobile.webp" media="(min-width:320px)">
        <img src="<?= base_url()?>assets/images/banner.webp" alt="">
    </picture>
	
	<div class="top_animation">
		<img src="<?= base_url()?>assets/images/banner-animation.webp" alt="">
	</div>
	<div class="overlay">
		<div class="container">
			<div class="copy_block">
				<h1 data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">pushing <br><span>boundaries</span></h1>
				<p data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000">At Absstem we believe in doing things differently and constantly set new standards of performance. Be it the purity in gas <br>separation or the service standards we are here to show the world that whatever it is, it can be done better.</p>
			</div>	
		</div>
	</div>
	<div class="scroll_down">
		<a class="scroll-link" data-id="wwa">
			<img class="point" src="<?= base_url()?>assets/images/down-arrow.webp" alt="">
			<span class="txt">Scroll Down</span>
		</a>
	</div>
</section>
<div class="form_wrapper">
	<a class="enq_btn">
		<span>
			<img class="left" src="<?= base_url()?>assets/images/enq-arrow-left.webp" alt="">
			<img class="right" src="<?= base_url()?>assets/images/enq-arrow-right.webp" alt="">
		</span>
        <img class="enq_img" src="<?= base_url()?>assets/images/enq-btn.webp" alt="">
    </a>
	<div class="form_block">
		<a class="close_form"><img class="point" src="<?= base_url()?>assets/images/close.webp" alt=""></a>
		<div class="inner">
			 	
				<form class="row enquiry-form" action="<?= base_url()?>enquiry" method="post">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Your Name*" name="name">
					<?php echo form_error('name'); ?> 
				</div>
				<div class="form-group">
					<input name="email" type="email" class="form-control" placeholder="Email ID*">
					<?php echo form_error('email'); ?> 
				</div>
				<div class="form-group">
					<input name="mobile" type="text" class="form-control" placeholder="Contact No*" onkeypress="return isNumberKey(event)">
					<?php echo form_error('mobile'); ?> 
				</div>
				<div class="form-group btn_wrap">
					<button class="btn" name="submit" value="submit"><span>Submit</span></button>
				</div>
			</form>
		</div>
	</div>
</div>
<section class="product_section">
	<div class="container">
		<div class="owl-carousel product_carousel" data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000">
			<div class="item">
				<div class="product_img">
					<img class="layer" data-speed="-1" src="<?= base_url()?>assets/images/product.webp" alt="">
					<div class="shadow"></div>
				</div>
				<div class="product_des">
					<div class="heading">
						<h2>Medo</h2>
						<h3 class="layer" data-speed=".7">Products</h3>
					</div>
					<p>In hospitals with a large number of beds, getting a separate oxygen cylinder at each bed becomes quite a task. Adding to this, ensuring the availability of a backup for each one of them makes it all the more tedious...</p>
					<a href="#" class="btn"><span>Read More</span></a>
				</div>
			</div>
			<div class="item">
				<div class="product_img">
					<img class="layer" data-speed="-1" src="<?= base_url()?>assets/images/product.webp" alt="">
					<div class="shadow"></div>
				</div>
				<div class="product_des">
					<div class="heading">
						<h2>Medo</h2>
						<h3 class="layer" data-speed=".7">Products</h3>
					</div>
					<p>In hospitals with a large number of beds, getting a separate oxygen cylinder at each bed becomes quite a task. Adding to this, ensuring the availability of a backup for each one of them makes it all the more tedious...</p>
					<a href="#" class="btn"><span>Read More</span></a>
				</div>
			</div>
			<div class="item">
				<div class="product_img">
					<img class="layer" data-speed="-1" src="<?= base_url()?>assets/images/product.webp" alt="">
					<div class="shadow"></div>
				</div>
				<div class="product_des">
					<div class="heading">
						<h2>Medo</h2>
						<h3 class="layer" data-speed=".7">Products</h3>
					</div>
					<p>In hospitals with a large number of beds, getting a separate oxygen cylinder at each bed becomes quite a task. Adding to this, ensuring the availability of a backup for each one of them makes it all the more tedious...</p>
					<a href="#" class="btn"><span>Read More</span></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="certification_section">
	<div class="container">
		<div class="heading" data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000">
			<h2>Certifications</h2>
			<h3 class="layer" data-speed=".7">Accreditation</h3>
		</div>
		<ul class="certificate_list">
			<li>
				<img data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" src="<?= base_url()?>assets/images/certificate1.webp" alt="">
			</li>
			<li>
				<img data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" src="<?= base_url()?>assets/images/certificate2.webp" alt="">
			</li>
			<li>
				<img data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" src="<?= base_url()?>assets/images/certificate3.webp" alt="">
			</li>
			<li>
				<img data-aos="fade-down" data-aos-delay="500" data-aos-duration="1000" src="<?= base_url()?>assets/images/certificate4.webp" alt="">
			</li>
			<li>
				<img data-aos="fade-up" data-aos-delay="600" data-aos-duration="1000" src="<?= base_url()?>assets/images/certificate5.webp" alt="">
			</li>
			<li>
				<img data-aos="fade-down" data-aos-delay="700" data-aos-duration="1000" src="<?= base_url()?>assets/images/certificate6.webp" alt="">
			</li>
			<li>
				<img data-aos="fade-up" data-aos-delay="800" data-aos-duration="1000" src="<?= base_url()?>assets/images/certificate7.webp" alt="">
			</li>
		</ul>
	</div>
</section>
<section class="partner_section">
	<div class="container">
		<div class="inner">
			<div class="copy_block">
				<div class="heading" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
					<h2>Installations</h2>
					<h4 class="layer" data-speed=".7">Our Partners</h4>
				</div>
				<p data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">At Absstem, we serve a large number of clients within the healthcare sector. Click on the map to see the organizations that bank on our oxygen generators and gas pipeline systems. We have been working with some of the leading names across the country. As we move forward, these numbers keep increasing, helping us grow as an entity.</p>
				<ul>
					<li data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
						<span class="count">29</span>
						States
					</li>
					<li data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
						<span><b class="count">200</b>+</span>
						installations
					</li>
				</ul>
			</div>
			<div class="center_div">
			<div class="map_block show-on-scroll">
				<img src="<?= base_url()?>assets/images/india-map.webp" alt="">
				<div class="circle_block">
                    <ul class="circle_dots">
                        <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Ladakh</p>
                            </div>
                        </li>
                         <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Jammu & Kashmir</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Himachal Pradesh</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Punjab</p>
                            </div>
                        </li>
						<li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Uttarakhand</p>
                            </div>
                        </li>
                         <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Delhi</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Haryana</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Rajasthan</p>
                            </div>
                        </li>
						<li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Uttar Pradesh</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Bihar</p>
                            </div>
                        </li>
						<li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Jharkhand</p>
                            </div>
                        </li>
                         <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>West Bangal</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Madhya Pradesh</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Gujarat</p>
                            </div>
                        </li>
						<li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Maharashtra</p>
                            </div>
                        </li>
                         <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Chhattisgarh</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Orrisa</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Telangana</p>
                            </div>
                        </li>
						<li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Karnataka</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Kerala</p>
                            </div>
                        </li>
						<li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Andhra Pradesh</p>
                            </div>
                        </li>
                         <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Tamil Nadu</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Lakshadweep</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Sikkim</p>
                            </div>
                        </li>
						<li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Meghalaya</p>
                            </div>
                        </li>
                         <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Assam</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Andhra Pradesh</p>
                            </div>
                        </li>
						 <li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Manipur</p>
                            </div>
                        </li>
						<li>
                            <span><img src="<?= base_url()?>assets/images/drop.webp" alt=""></span>
                            <div class="state">
                                <p>Mizoram</p>
                            </div>
                        </li>
                    </ul>
                </div>
			</div>
			</div>	
		</div>	
	</div>
</section>
<section class="roi_section">
	<div class="container">
		<div class="heading" data-aos="fade-down" data-aos-delay="400" data-aos-duration="1000">
            <h2> Savings calculator</h2>
            <h3 class="layer" data-speed=".7">ROI</h3>
        </div>
		<div class="flexbox" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
			<div class="calc_block">
                <div class="r_block">
                    <div class="range_block">
						<ul class="nav nav-tabs animated fadeInDownShort delay-500">
							<li class="active" data-val="bed">
								<a href="#tab1" data-toggle="tab"><span>Bed</span></a>
							</li>
							<li data-val="cylinder">
								<a href="#tab2" data-toggle="tab"><span>Cylinder</span></a>
							</li>
							<li class="hospital">in Hospital</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane in active" id="tab1">
								<div class="range_inpt">
									<input type="text" class="form-control" value="523">
								</div>	
								<div class="inner">
									<input id="range1" class="beds" type="text" data-slider-min="5" data-slider-max="1025" data-slider-step="1" data-slider-value="523"/>
									<ul class="lbl_list">
										<li>5</li>
										<li>1025</li>
									</ul>
								</div>
							</div>
							<div class="tab-pane" id="tab2">
								<div class="range_inpt">
									<input type="text" class="form-control" value="333">
								</div>
								<div class="inner">
									<input id="range2" class="cylinder" type="text" data-slider-min="5" data-slider-max="1025" data-slider-step="1" data-slider-value="333"/>
									<ul class="lbl_list">
										<li>5</li>
										<li>1025</li>
									</ul>
								</div>
							</div>
						</div>
                    </div>	
                </div>
			</div>
			<div class="total_bloack">
				<ul>
                    <li>Monthly Savings <span class="month"><span>₹</span> 53,541/-</span></li>
                    <li>Annual Savings <span class="anual"><span>₹</span> 642,500/-</span></li>
                </ul>
			</div>
		</div>
		<p data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">*Savings as compared to oxygen cylinder at ₹ 250</p>
	</div>
</section>
<section class="stories_section">
	<div class="container">
		<div class="flexbox">
			<div class="testimonial_imgblock" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
				<div class="heading">
					<h2>Stories</h2>
					<h3 class="layer" data-speed=".7">Testimonials </h3>
				</div>
				<div class="slider-for">
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img01.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img02.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img03.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img04.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img05.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img06.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img07.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img08.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img09.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img10.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img11.webp" alt="">
						</div>
					</div>
					<div>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/testimonial-img12.webp" alt="">
						</div>
					</div>
				</div>
			</div>	
			<div class="testimonial_copyblock" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1000">
				<div class="heading">
					<h2>Stories</h2>
					<h3 class="layer" data-speed=".7">Testimonials</h3>
				</div>
				<div class="slider-nav">
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo2.webp" alt="">
						</div>
						<p>"We are receiving good engineering services and support in a very professional and efficient manner to our satisfaction"</p>
						<h6>Civil Hospital<span>Shillong, Meghalaya</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p>"Absstem has delivered what was offered. We've managed to reduce our operational expenses drastically after the installation of MedO"</p>
						<h6>Kainos Super Speciality Hospital<span>Rohtak, Haryana</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p> "We are absolutely satisfied with MeDo and the team that has been guiding us throughout the process of installation and service"</p>
						<h6>Geetanjali Hospital<span>Hisar, Rohtak</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p>"This is the very first oxygen generator in Ladakh. We are thoroughly excited and happy to see Indian products like MedO deliver with such perfection."</p>
						<h6>Government Hospital<span>Kargil, Ladakh</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p>"Our interaction with Absstem technologies has been fantastic. Since the beginning, they have been with us throughout the journey of installation, commissioning and services." </p>
						<h6>Vanshika Children Hospital<span>Varanasi, Uttar Pradesh</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p> "We are very happy with the installation of MedO. The device has met all our expectations in terms of Purity of Oxygen, Cost Saving and the Capacity offered"</p>
						<h6>Dr. Imkongliba Memorial District Hospital<span>Mokokchung, Nagaland (govt)</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo.webp" alt="">
						</div>
						<p>"MedO has been performing satisfactorily from the date of its commissioning. We confidently recommend Absstem Technologies"</p>
						<h6>Mishra Poly Clinic and Research Centre Private Limited<span>Darbhanga, Bihar</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p>"The engineering service and support team are very professional and efficient. We highly recommend Absstem as a reliable expert in their field. This is the very first oxygen generator on these islands"</p>
						<h6>Indira Gandhi Hospital<span>Kavaratti, Lakshadweep Island</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p>"The device is great and the after-sales service is remarkable. Absstem definitely knows a lot about oxygen generators"</p>
						<h6>Sai Hospital<span>Haldwani, Uttarakhand</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p>"We had recently installed the MedO device at our hospital for in-house oxygen generation. The device has not failed even once until now and their support team is always in contact with us."</p>
						<h6>Mahatma Gandhi Post Graduate Institute of Dental Sciences<span>Indira Nagar, Puducherry</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p>"We are very happy with the consistent delivery of pure oxygen and the capacity offered by MedO"</p>
						<h6>Government Medical College and Hospital<span>Chandigarh</span></h6>
					</div>
					<div>
						<div class="logo_img">
							<img src="<?= base_url()?>assets/images/testimonial-logo3.webp" alt="">
						</div>
						<p>"It has been wonderful working with Absstem Technologies. They've installed a great product which has been consistently providing perfect medical-grade oxygen purity"</p>
						<h6>Deen Dayal Upadhayay Zonal Hospital<span>Shimla, Himachal Pradesh</span></h6>
					</div>
				</div>
			</div>	
		</div>	
	</div>
</section>
<section class="assurance_section">
	<div class="container">
		<div class="flexbox">
			<div class="copy_block">
				<div class="heading" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">
					<h2>Absstem Shield</h2>
					<h4 class="layer" data-speed=".6">Our Assurance</h4>
				</div>
				<p data-aos="fade-right" data-aos-delay="400" data-aos-duration="1000">We understand the urgency of maintenance requirements in the industry we are in. Absstem Shield is our premium service, which includes after-sales support for helping keep your oxygen or nitrogen generators in great condition. A certified shield service engineer is assigned within four hours of you reporting an issue with any of our products, ensuring that it gets fixed in no time.</p>
				<a href="#" class="btn" data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000"><span>Read More</span></a>
			</div>
			<div class="shield_block">
				<img class="layer" data-speed="-1" src="<?= base_url()?>assets/images/shield-logo.webp" alt="">
			</div>
		</div>
	</div>
</section>
<?php $this->load->view('frontend/include/footer'); ?>
<script>
	jQuery.validator.addMethod("lettersonly", function(value, element) {
		  return this.optional(element) || /^[a-z]+$/i.test(value);
		}, "Only Letters allowed."); 
	 $('.enquiry-form').validate({
      rules: {
        name: {
          required: true,
          lettersonly: true          
        },
        email: {
          required: true,
          email: true    
        },
        mobile: {
          required: true         
        }
      },
      messages: {
        name: {
          required: "Please enter Name"
        },
        email: {
          required: "Please enter Email"
        },
        mobile: {
          required: "Please enter Mobile"
        }
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      },submitHandler: function(form) {
        $(".lds-ellipsis").show();
        form.submit();
      }
    });
</script>