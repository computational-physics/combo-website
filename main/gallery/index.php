<!DOCTYPE HTML>
<HTML>
<head>
<?php require('../inc_head.php'); ?>
<style type="text/css">
	.back-to-top {
		z-index: 10000;
	    position: fixed;
	    bottom: 2em;
	    right: 0px;
	    text-decoration: none;
	    color: #000000;
	    background-color: rgba(235, 235, 235, 0.80);
	    font-size: 12px;
	    padding: 1em;
	    display: none;
	    cursor: pointer;
	}

	.back-to-top:hover {    
	    background-color: rgba(0, 0, 0, 0.50);
	    color: white;
	}

	.vertical-center .col-sm-6, .vertical-center .col-sm-5, .vertical-center .col-sm-7 {
		float:none;
		display:inline-block;
		vertical-align:middle;
		margin-right:-4px;
	}

</style>
<script type="text/javascript">
	$(function() {
	    var offset = 220;
	    var duration = 500;
	    $(window).scroll(function() {
	        if (jQuery(this).scrollTop() > offset) {
	            jQuery('.back-to-top').fadeIn(duration);
	        } else {
	            jQuery('.back-to-top').fadeOut(duration);
	        }
	    });
	    
	    $('.back-to-top').click(function(event) {
	        event.preventDefault();
	        jQuery('html, body').animate({scrollTop: 0}, duration);
	        return false;
	    })
	});
</script>
</head>



<body>
	<a href="#" class="back-to-top">Back to top</a>
	<div class="container">
		<?php require('../inc_header.php') ?>
		<!-- /header -->
		<div class="row">
			<?php require('../inc_sidebar.php') ?>
			<div class="col-md-9">
				<div class="row">
					<a name="barph"></a>

					<!-- CBSB 2018 -->
					<div class="col-sm-6">
						<img class="img-thumbnail" src="../img/gallery/2018CBSB.jpg">
					</div>
					<div class="col-sm-6">
						<p class="lead text-info">
						<br />
						<br />
						<br />
						The <strong>CBSB2018</strong> workshop was held on May 20-23 in Shenzhen. 
						<br />Dr. Jun Fan and Yonghui Zhang presented our works, and Zhen Li presented a poster.
						</p>
					</div>
					
	
	
					
					

					
					
					
					
					
					
					
					
					
					
					
					
					
					
				</div>



			</div>
		</div>
	</div>

	<?php require('../inc_footer.php') ?>
</body>
</HTML>
