<!DOCTYPE HTML>
<HTML>
<head>
<?php require('./inc_head.php'); ?>
<script type="text/javascript" src="js/jquery.fittext.js"></script>
<style type="text/css">
	.popover {
		max-width: 100%;
	}
</style>
<script type="text/javascript">
	$(function(){
		$("[data-toggle=popover]").popover(); 
		$('.carousel').carousel();
		jQuery("#course-row h1").fitText();
	});
</script>
</head>
<body>
	<div style="width: 100%; display: none" id="go_wiki" class="well text-center well-sm">
		Click <a href="//ourphysics.org/wiki">here</a> to jump to group wiki site.
	</div>
	<div class="container">
		<?php require('./inc_header.php') ?>
		<!-- /header -->

		<!-- seperator -->
			<img class="img-responsive seperator" src="img/seperator2.png">
		<!-- /seperator -->

		<!-- slider -->
		<div id="carousel-slider" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-slider" data-slide-to="1"></li>
				<li data-target="#carousel-slider" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="img/slider2.jpg">
				</div>
				<div class="item">
					<img src="img/slider1.jpg">
				</div>
				<div class="item">
					<img src="img/slider3.jpg">
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="index.php#carousel-slider" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
				<a class="right carousel-control" href="index.php#carousel-slider" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<script type="text/javascript">
		$(function(){
			$('.carousel').carousel();
		})
		</script>
		<!-- /slider -->


		

		<div class="row">
			<div class="col-sm-12" style="text-align: center;">
				<img class="img-responsive seperator" src="img/seperator1.png" />


		







			</div>
		</div>
		
		<div class="row" id="course-row">
			<div class="col-xs-12">
		<legend class="section-heading"> Research Interests</legend>

<h4> Theoretical and Computational Biophysics </h4> 

We are interested in exploring structure, dynamics, property and function of soft materials including (a)
 Lipids and membranes, (b) protein and protein complex, and (c)
 membrane & protein systems. 
</br>
</br> 
<h4>
Non-equilibrium phase transitions </h4>
Rapid solidification, solute trapping, solute redistribution along the interface.
</br></br>
<h4> Scientific Computing
</h4>  GPU Computing 


				<legend class="section-heading">Teaching</legend>
			</div>
			<div class="col-sm-3">
				<h1>AP3114</h1>
				<h4>Computational Methods for Physicists and Materials Engineers</h4>
				<a class="btn btn-primary" href="course/ap3114.php" target="_blank">View Detail</a>
			</div>
			<div class="col-sm-3">
				<h1>AP3420</h1>
				<h4>Biophysics (NEW!)</h4>
				<a class="btn btn-primary" href="course/ap3420.php" target="_blank">Under Construction</a>
			</div>
			<div class="col-sm-3">
				<h1>AP4173/6173/8173</h1>
				<h4>Biomedical Materials</h4>
				<a class="btn btn-primary" href="course/ap4173.php" target="_blank">View Detail</a>
			</div>
			<div class="col-sm-3">
				<h1>AP4175/6175</h1>
				<h4>Advanced Technologies in Biomedical Devices </h4>
				<a class="btn btn-primary" href="course/ap4175.php" target="_blank">View Detail</a>
			</div>
		</div>

	</div>

	<?php require('./inc_footer.php') ?>
</body>
</HTML>
