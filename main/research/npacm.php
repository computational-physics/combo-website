<!DOCTYPE HTML>
<HTML>
<head>
<?php require('../inc_head.php'); ?>
</head>
<body>
	<div class="container">
		<?php require('../inc_header.php') ?>
		<!-- /header -->
		<div class="row">
			<?php require('../inc_sidebar.php') ?>
			<div class="col-md-9">
				<div class="row">
					<div class="col-xs-12">
						<h1> Membrane Internalization of Nanoparticles </h1>
					</div>
					<div class="col-sm-12">
						<p>
							Nano-particle has been be used to detect cancer cells. We built a continuum model to simulate the internalization process of nano-particles. (J. Meng, J. Fan, et al, MSEC 2009) 
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_13.png" />
							</div>
							<div class="col-s-6">
								<div class="tomakecenter"></div>
										(a) Cartoon illustration; (b) Experimental Results (c) A group of LHRL-SPIONS  nano-particles has been entered the cell.
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								
							</div>
						</div>
			
		
                                       <legend class="section-heading"> References </legend>
Juan Meng, <b>Jun Fan</b>, et al: LHRH-functionalized superparamagnetic iron oxide nanoparticles for breast cancer targeting and contrast enhancement in MRI, <a href="http://www.sciencedirect.com/science/article/pii/S0928493108002555"> Materials Science and Engineering C, 29:1467-1479 (2009) </a>

</div>
				</div>
			</div>
		</div>

	</div>

	<?php require('../inc_footer.php') ?>
	<script type="text/javascript">
		// make figure capture vertically center
		$(function(){
			$("img").load(function() {
				$(".tomakecenter").each(function(){
					$(this).height(($(this).parent().parent().height()-$(this).parent().height())/2);
				});
				
			});
		});
	</script>
</body>
</HTML>
