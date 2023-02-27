<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Absstem Technologies</title>
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/favicon.png" />

<link href="<?= base_url()?>assets/css/aos.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.css">
<link href="<?= base_url()?>assets/css/bootstrap-slider.css" type="text/css" rel="stylesheet">	
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/responsive.css">

<style>
.error {
    color: #ff0000ba;
}
</style>
<script type="text/javascript" src="<?= base_url()?>assets/js/jquery.min.js"></script>	
<script type="text/javascript" src="<?= base_url()?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/bootstrap-slider.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/aos.js"></script>	
<script type="text/javascript" src="<?= base_url()?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/slick.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/onscreen.js"></script>
<script type="text/javascript" src="<?= base_url()?>assets/js/custom.js"></script>
<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url()?>assets/js/sweetalert.min.js"></script>
</head>
<body>

<main>
	<header>
		<div class="container">
			<div class="navbar_header">
				<div class="logo">
					<a href="<?= base_url()?>">
						<img src="<?= base_url()?>assets/images/logo.webp" alt="">
					</a>	
				</div>
			</div>
            <div class="navigation">
                <ul class="">
                    <li><a href="<?= base_url()?>aboutus">About Us</a></li>
                    <li><a href="<?= base_url()?>products">Products</a></li>
                    <li><a href="<?= base_url()?>support">Support</a></li>     
                    <li><a href="#">R & D</a></li>   
                    <li><a href="<?= base_url()?>partners">Partners</a></li>  
                    <li><a href="#">Newsroom</a></li>  
                    <li><a href="<?= base_url()?>contact">Contact Us</a></li>                               
                    <li><a href="#"><i class="fa fa-search"></i></a></li>                               
                </ul>                                 
            </div>
		</div>
	</header>
	<div class="bottom_fixed">
		<ul>
			<li>
				<a href="#"><i class="fa fa-search"></i></a>
			</li>
			<li class="enq">
				<a>Enquire Now</a>
			</li>
			<li class="toggle">
                <button type="button" class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
			</li>
		</ul>
	</div>
	<?php if($this->session->flashdata('success')){ ?>
    <script>swal({
                title: "<?php echo $this->session->flashdata('success');?>",
                icon: "success",
                timer: 3000,
                showConfirmButton: false,
                showCancelButton: false,               
                type: 'success',
            });</script>
<?php } ?>