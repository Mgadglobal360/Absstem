<?php $this->load->view('frontend/include/header'); ?>
	<section class="inner_banner">
		<picture>
            <source srcset="<?= base_url()?>assets/images/product-banner.webp" media="(min-width:1023px)">
            <source srcset="<?= base_url()?>assets/images/product-banner-mobile.webp" media="(min-width:320px)">
            <img src="<?= base_url()?>assets/images/product-banner.webp" alt="">
        </picture>
	</section>
	
	<section class="absstem_product" >
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="sidebar">
						<div class="make_me_sticky" id="floating-navbar">
							<ul class="product_nav nav">
								<li class="active"><a class="scroll-link" data-id="about-medo" href="#about-medo"><span><span>About Medo</span> <i class="fa fa-chevron-right"></i></span></a></li>
								<li><a class="scroll-link" data-id="features" href="#features"><span><span>Features</span> <i class="fa fa-chevron-right"></i></span></a></li>
								<li><a class="scroll-link" data-id="benefits" href="#benefits"><span><span>Benefits</span> <i class="fa fa-chevron-right"></i></span></a></li>
								<li><a class="scroll-link" data-id="psa-process" href="#psa-process"><span><span>PSA Process</span> <i class="fa fa-chevron-right"></i></span></a></li>
								<li><a class="scroll-link" data-id="technical-data" href="#technical-data"><span><span>Technical Data</span> <i class="fa fa-chevron-right"></i></span></a></li>
								<li><a class="scroll-link" data-id="certifications" href="#certifications"><span><span>Certifications</span> <i class="fa fa-chevron-right"></i></span></a></li>
								<li><a class="scroll-link" data-id="compressor" href="#compressor"><span><span>Compressor</span> <i class="fa fa-chevron-right"></i></span></a></li>
								<li><a class="scroll-link" data-id="advantages-absstem" href="#advantages-absstem"><span><span>Advantages of Absstem</span> <i class="fa fa-chevron-right"></i></span></a></li>
								<li><a class="scroll-link" data-id="applications" href="#applications"><span><span>Applications</span> <i class="fa fa-chevron-right"></i></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-9">
					<div id="about-medo" class="right_panel pm_panel">
						<div class="heading">
							<h2>About Medo</h2>
							<h3 class="layer" data-speed=".7">Product</h3>
						</div>	
						<p>MedO, the smart and efficient oxygen generator, aims to help medical facilities produce their own medical-grade oxygen onsite. This eliminates logistical challenges and saves them from stocking up pre-filled cylinders. With a series of air filters and a special bacterial filter, MedO produces oxygen within the recommended range of purity (93% ± 3%) even when the intake contains a high concentration of pollutants.</p>
					</div>
					<div id="features" class="right_panel f_panel">
						<h4><span>Features</span></h4>
						<ul class="feature_list">
							<li>
								<div class="inner">
									<div class="icon">
										<img src="<?= base_url()?>assets/images/features01.webp" alt="">
									</div>
									<p>All Equipment Meets Manufacturing Standards</p>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="icon">
										<img src="<?= base_url()?>assets/images/features02.webp" alt="">
									</div>
									<p>24x7 Onsite Oxygen Production</p>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="icon">
										<img src="<?= base_url()?>assets/images/features03.webp" alt="">
									</div>
									<p>Worldwide Pharmacopeia Compliant</p>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="icon">
										<img src="<?= base_url()?>assets/images/features04.webp" alt="">
									</div>
									<p>Advanced Display & Control System</p>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="icon">
										<img src="<?= base_url()?>assets/images/features05.webp" alt="">
									</div>
									<p>ROI Less <br>than 2 Years</p>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="icon">
										<img src="<?= base_url()?>assets/images/features06.webp" alt="">
									</div>
									<p>Ergonomic & <br>Compact Design</p>
								</div>
							</li>
							<li>
								<div class="inner">
									<div class="icon">
										<img src="<?= base_url()?>assets/images/features07.webp" alt="">
									</div>
									<p>10+ Years <br>Life</p>
								</div>
							</li>
						</ul>
					</div>
					<div id="benefits" class="right_panel b_panel">
						<h4><span>Benefits</span></h4>
						<ul class="benefit_list">
							<li>
								<h5><span>Consistent Supply</span></h5>
							</li>
							<li>
								<h5><span>Fully Automated</span></h5>
							</li>
							<li>
								<h5><span>Audio Visual Alarms</span></h5>
							</li>
							<li>
								<h5><span>Ready to Use</span></h5>
							</li>
							<li>
								<h5><span>Easy Installation</span></h5>
							</li>
							<li>
								<h5><span>Lower Maintenance Costs</span></h5>
							</li>
							<li>
								<h5><span>Constant Service & Support</span></h5>
							</li>
						</ul>
					</div>
					<div id="psa-process" class="right_panel psa_panel">
						<div class="heading">
							<h2>PSA Process</h2>
							<h3 class="layer" data-speed=".7">Working</h3>
						</div>
						<p>This process uses atmospheric air (20.9% oxygen, 78% nitrogen, 0.9 % argon and 0.2% other gases) to produce life-saving O2. It mainly involves four stages:</p>
						<div class="img_block">
							<img src="<?= base_url()?>assets/images/psa-process.webp" alt="">
						</div>
						<p>Absstem's medical oxygen generator uses only atmospheric air as raw material. Medical oxygen generator consists of two adsorbers filled with zeolite molecular sieves. Pressurized air is passed through one of these adsorbers, zeolite having a structure to attract nitrogen, adsorbs itrogen from air and oxygen is allowed to pass through to the storage tank and is produced as the final product. As adsorber approaches saturation, air is allowed to pass through the other adsorber while this adsorber is being regenerated to ensure a continuous supply of medical oxygen. This changeover takes place through a specially designed micro controller to ensure a hassle free operation. The quality of oxygen produced is continuously monitored by an oxygen analyzer.</p>
						<div class="ed_wrap">
							<div class="col-6">
								<div class="inner">
									<h4><span>Engineering</span></h4>
									<p>The integral components of MEDO include: -</p>
									<ul class="list-1">
										<li><strong>Oil-Free Air Compressor</strong> – Pulls in the ambient air</li>
										<li><strong>Refrigeration Dryer</strong> - Removes water vapour from compressed air</li>
										<li><strong>Air Tank</strong> - Removes moisture and minimizes pulsation</li>
										<li><strong>Multistage Filtration System</strong> - Decontaminates the compressed air</li>
										<li><strong>Inlet Air Monitoring System</strong> - Eradicates molecular sieve contamination</li>
										<li><strong>PSA System</strong> - Releases nitrogen and other gases </li>
										<li><strong>Storage System</strong> - Stores the produced oxygen </li>
										<li><strong>HEPA Filter</strong> - Removes bacterial contamination </li>
									</ul>
								</div>
							</div>
							<div class="col-6">
								<div class="inner">
									<h4><span>Design</span></h4>
									<p>We have designed our products to cater to the needs of both Indian and international markets. All our systems come equipped with a touchscreen monitor for easier operation. There’s a purity analyzer to ensure the supply of pure oxygen while being compliant with the European, US and Indian Pharmacopeia. To eliminate any potential space issues, our engineers have worked relentlessly to make sure our oxygen generators have compact form factors.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="technical-data" class="right_panel td_panel">
						<div class="heading">
							<h2>Technical data</h2>
							<h3 class="layer" data-speed=".7">STATS</h3>
						</div>
						<div class="td_wrap">
							<div class="col-6">
								<div class="inner">
									<ul class="list-1">
										<li>Inlet air as per  <strong>ISO 8573.1:2010 - Class  1.4.1</strong></li>
										<li>Medical grade conforming to <strong>US, EU. UK and Indian pharmacopoeia</strong>.</li>
										<li><strong>Pressure up to 200 kg/cm2g</strong> is available on demand <strong>through oxygen compressors</strong>.</li>
										<li><strong>Relative humidity</strong> - Max. 80%</li>
										<li><strong>Sound Level of 65 db</strong> from a distance of 1 meter.</li>
										<li><strong>Oxygen flow</strong> is 2.5 to 250 – NM/hr</li>
										<li><strong>O<sub>2</sub> Delivery Pressure</strong> is 5.3 barg</li>
										<li><strong>Oxygen dew point</strong> is -50O c</li>
									</ul>
								</div>
							</div>
							<div class="col-6">
								<div class="inner">
									<ul class="list-1">
										<li><strong>USB Storage</strong> is there to store parameters values.</li>
										<li>CE certified electrical & electronics with <strong>24 VDC operating Voltage</strong>.</li>
										<li>All tanks are fabricated per <strong>ASME standards</strong>.</li>
										<li>All tanks have corrosion resistant <strong>internal environment</strong>.</li>
										<li><strong>ISO 9001 2015:</strong> Manufacturing is in accordance with certified QMS Quality Management System.</li>
										<li><strong>Working temperature</strong> is -5O C to 45O C</li>
										<li><strong>Power Supply</strong> is 230 VAC, 50/60 Hz</li>
										<li><strong>Inlet air pressure</strong> is Min 7.5 barg</li>
									</ul>
								</div>
							</div>
						</div>
						<h6>Oxygen concentration of Absstem medo is 95%(+_)1 as compared to EU, USA, ISO 1003.</h6>
					</div>
					<div id="certifications" class="right_panel certificate_panel">
						<div class="heading">
							<h2>Certifications</h2>
							<h3 class="layer" data-speed=".7">Accreditation</h3>
						</div>
						<ul class="certificate_list">
							<li><img src="<?= base_url()?>assets/images/product-certificate01.webp" alt=""></li>
							<li><img src="<?= base_url()?>assets/images/product-certificate02.webp" alt=""></li>
							<li><img src="<?= base_url()?>assets/images/product-certificate03.webp" alt=""></li>
							<li><img src="<?= base_url()?>assets/images/product-certificate04.webp" alt=""></li>
							<li><img src="<?= base_url()?>assets/images/product-certificate05.webp" alt=""></li>
							<li><img src="<?= base_url()?>assets/images/product-certificate06.webp" alt=""></li>
						</ul>
					</div>
					<div id="compressor" class="right_panel compressor_panel">
						<div class="heading">
							<h2>Product Types</h2>
							<h3 class="layer" data-speed=".7">Compressor</h3>
						</div>
						<div class="block">
							<div class="img_block">
								<img src="<?= base_url()?>assets/images/product-type01.webp" alt="">
							</div>
							<div class="copy_block">
								<div class="inner">
									<h4><span>High Pressure Oxygen Compressor</span></h4>
									<p>Our high-pressure oxygen compressor is CE approved and suitable for the production of medical-grade oxygen on larger scales. It comes with a reliable motor that has been specifically designed for superior life. Only the piston ring needs to be changed and that too after 4000 hours of continuous operation.</p>
								</div>
							</div>
						</div>
						<div class="block even">
							<div class="img_block">
								<img src="<?= base_url()?>assets/images/product-type02.webp" alt="">
							</div>
							<div class="copy_block">
								<div class="inner">
									<h4><span>Skid System</span></h4>
									<ul class="list-1">
										<li>This system comes with a compressor, multistage filtration system and de-greased storage vessel.</li>
										<li>This is a compact and mobile oxygen generator.</li>
										<li>It’s a complete package with all instruments required for oxygen generation.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="block">
							<div class="img_block">
								<img src="<?= base_url()?>assets/images/product-type03.webp" alt="">
							</div>
							<div class="copy_block">
								<div class="inner">
									<h4><span>Container PSA System</span></h4>
									<ul class="list-1">
										<li>Skid mounted mobile systems with complete piping and interlocking support.</li>
										<li>Advanced designed for army or areas prone to natural disasters.</li>
										<li>Cylinder filling option with noise control for multiple location delivery.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div id="advantages-absstem" class="right_panel advantages_panel">
						<div class="heading">
							<h2>Advantages of Absstem</h2>
							<h3 class="layer" data-speed=".7">ROI</h3>
						</div>
						<div class="pic_block">
							<img src="<?= base_url()?>assets/images/product-roi-img.webp" alt="">
						</div>
						<div class="copy_block">
							<p>With great emphasis on cost-effective, low-impact business practices, most businesses opt for bulk delivery to meet all their industrial gas requirements. But given the fluctuation in market prices of gases like oxygen and nitrogen, this is no more a viable option. A large number of industries are using onsite gas generation plants for reliability and improved ROI.</p>
							<div class="img_block">
								<img src="<?= base_url()?>assets/images/roi-graph.webp" alt="">
							</div>
						</div>
					</div>
					<div id="applications" class="right_panel applications_panel">
						<div class="heading">
							<h2>Applications</h2>
							<h3 class="layer" data-speed=".7">Applications</h3>
						</div>
						<div class="block">
							<div class="img_block">
								<img src="<?= base_url()?>assets/images/product-application01.webp" alt="">
							</div>
							<div class="copy_block">
								<div class="inner">
									<h4><span>Hospitals & Clinics</span></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus efficitur ex vel neque ullamcorper, eu auctor turpis mattis. Pellentesque vulputate velit orci, a euismod purus scelerisque feugiat. Vivamus maximus leo sit amet magna eleifend, sollicitudin venenatis sem vestibulum. Phasellus non tellus fermentum, convallis augue at, consequat nibh. Vivamus consectetur turpis tortor, a blandit leo mollis posuere. Vestibulum in augue a tellus consequat maximus. Quisque in facilisis erat. Phasellus eget purus eleifend, tempor velit vitae, pharetra lectus.</p>
								</div>
							</div>
						</div>
						<div class="block even">
							<div class="img_block">
								<img src="<?= base_url()?>assets/images/product-application02.webp" alt="">
							</div>
							<div class="copy_block">
								<div class="inner">
									<h4><span>Army Field/Hospital</span></h4>
									<p>We have developed our oxygen generators keeping in mind the oxygen requirements in remote areas of the country where our frontline troops are deployed. It is practically not possible to set up fully-functional hospitals with all the advanced medical facilities at such locations. But it is relatively easier to install onsite oxygen generators at such places so that people who are fighting for us have enough supply of the life-saving O2 if and when required. </p>	
									<p>We have different installation schemes to suit the requirements of both army hospitals and temporary medical facilities built-in battlefields. </p>
								</div>
							</div>
						</div>
						<div class="block">
							<div class="img_block">
								<img src="<?= base_url()?>assets/images/product-application03.webp" alt="">
							</div>
							<div class="copy_block">
								<div class="inner">
									<h4><span>Hospital Cylinder filling</span></h4>
									<p>At times, it is better to keep sufficient stock of pre-filled oxygen cylinders as it can help a medical facility meet its fluctuating need for medical-grade oxygen. Our compact yet efficient medical oxygen plant can help you to fill a large number of cylinders in one day so that you do not face issues like inadequate supply.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php $this->load->view('frontend/include/footer'); ?>