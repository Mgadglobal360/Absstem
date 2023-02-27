<footer>
		<div class="container">
			<div class="flexbox">
				<div class="col-3">
					<h3>Our Products<i class="fa fa-angle-down"></i></h3>
					<div class="accrd_body">
						<ul class="footer_list">
							<li><a href="#">Medo- Oxygyn Generator</a></li>
							<li><a href="#">Medo Oxygen High Pressure System</a></li>
							<li><a href="#">Medical Gas Pipeline System</a></li>
							<li><a href="#">Industrial Oxygen Generator</a></li>
							<li><a href="#">Industrial Nitrogen Generator</a></li>
							<li><a href="#">Applications</a></li>
						</ul>
					</div>	
				</div>
				<div class="col-3">
					<h3>Quick Links<i class="fa fa-angle-down"></i></h3>
					<div class="accrd_body">
						<ul class="footer_list">
							<li><a href="#">About Company</a></li>
							<li><a href="#">Warranty</a></li>
							<li><a href="partners.html">Partners</a></li>
							<li><a href="#">Certificates</a></li>
							<li><a href="#">Gallery</a></li>
							<li><a href="#">FAQ's</a></li>
						</ul>
					</div>
				</div>
				<div class="col-3">
					<h3>Contact us<i class="fa fa-angle-down"></i></h3>
					<div class="accrd_body">
						<p>Plot #9, Sector 1, <br>
							DSIIDC Industrial Area, <br>
						Bawana, Delhi 110039 </p>
						<ul class="footer_list">
							<li>Mail us at : <a href="#">info@absstem.com</a></li>
							<li>Call Us: 1800 3010 3394</li>
						</ul>
					</div>
				</div>
				<div class="col-3">
					<h3>Connect with us</h3>
					<h5>Newsletter</h5>
					<div class="newsletter">
						<input type="email" class="form-control" placeholder="Your Email ID">
						<input type="button" class="btn" value="Submit">
					</div>
					<h5>Our Social connections</h5>
					<ul class="social_list">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom_footer">
			<div class="container">
				<div class="float-left">
					<p><img src="<?= base_url()?>assets/images/footer-logo.webp" alt=""> <span>&copy; Absstem Technologies LLP- 2022. All Rights Reserved.</span></p>
				</div>
				<div class="float-right">
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms & Conditions / Disclaimer</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</main>
<script>
	$(window).scroll(function(){
	'use strict';
	
   	$(".count:onScreen").each(function () {
   		$(this).prop('Counter',0).animate({
        	Counter: $(this).text()
    	}, {
        	duration: 6000,
        	easing: 'swing',
        	step: function (now) {
            	$(this).text(Math.ceil(now));
				
        	}
    	});
	});
	$(".count:onScreen").removeClass("count");
});
	

	$("#range1").slider({

		tooltip: 'always',
		tooltip_position:'bottom'
	});
	
	$("#range2").slider({
		tooltip: 'always',
		tooltip_position:'bottom'
	});

	$('.ovm_carousel').owlCarousel({
    margin:1,
    responsiveClass:true,
	autoplay:false,
    autoplayTimeout:5000,
	smartSpeed: 1000,
	nav:false,
	dots:false,
	loop:false,
	lazyLoad:true,
	mouseDrag:false,
    responsive:{
        0:{
			items:1,
			mouseDrag:true,
			margin:10,
			stagePadding:20,
        },
        480:{
			items:1,
			mouseDrag:true,
			margin:10,
			stagePadding:20,
        },
        767:{
			items:2,
			mouseDrag:true,
			margin:10,
			stagePadding:35,
        },
        1024:{
			items:3
        }
      }
	});

$('.gallery_carousel').owlCarousel({
    margin:30,
    responsiveClass:true,
	smartSpeed: 1000,
	nav:false,
	dots:false,
	loop:true,
	lazyLoad:true,
	mouseDrag:true,
	stagePadding:145,
	autoplay: true,
    slideTransition: 'linear',
    autoplayTimeout: 3500,
    autoplaySpeed: 3500,
    autoplayHoverPause: true,
    responsive:{
        0:{
			items:1,
			margin:10,
			stagePadding:50,
        },
        768:{
			items:2,
			stagePadding:90,
        },
        1024:{
			items:2
        }, 
		1279:{
			items:4
        }
      }
	});

function isNumberKey(evt) {
   //alert(evt.keyCode);
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode !== 45 && charCode !== 46 && charCode > 31 && charCode !== 118 && charCode !== 86
            && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

$('.beds').on('change',function(){
	var rang = parseInt($(this).val());
	var data =  {
        range : rang,
        tab:'bed'
      }
	 $.ajax({
            type: "Post",
            url: "<?php echo base_url('calculate'); ?>",
            data: data, 
            dataType: 'json', 
            success: function (data) {
             	var rangval = data.total_bed;
            	var total_anual = 	rangval*365*250;
				var seven_per = total_anual*.7;
				var anual_saveing  = total_anual-seven_per;
				
				$('.anual').html('₹ '+parseInt(anual_saveing).toLocaleString('en')+' /-');

				//month
				var total_anual_month = 	rangval*30*250;
				var seven_per_month = total_anual_month*.7;
				var anual_saveing_month  = total_anual_month-seven_per_month;
				
				$('.month').html('₹ '+parseInt(anual_saveing_month).toLocaleString('en')+' /-');
            }
        });
	
});

$('.cylinder').on('change',function(){
	var rang = parseInt($(this).val());
	var data =  {
        range : rang,
        tab:'cylinder'
      }
	 $.ajax({
            type: "Post",
            url: "<?php echo base_url('calculate'); ?>",
            data: data, 
            dataType: 'json', 
            success: function (data) {
             	var rangval = data.cylinder_per_day;
            	var total_anual = 	rangval*365*250;
				var seven_per = total_anual*.7;
				var anual_saveing  = total_anual-seven_per;
				
				$('.anual').html('₹ '+parseInt(anual_saveing).toLocaleString('en')+' /-');

				//month
				var total_anual_month = 	rangval*30*250;
				var seven_per_month = total_anual_month*.7;
				var anual_saveing_month  = total_anual_month-seven_per_month;
				
				$('.month').html('₹ '+parseInt(anual_saveing_month).toLocaleString('en')+' /-');
            }
        });
	
});


</script>	

</body>
</html>