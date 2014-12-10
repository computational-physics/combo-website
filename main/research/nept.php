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
						<h1>  Non-Equilibrium Phase Transitions </h1>
					</div>
					<div class="col-sm-12">
						<p>
							Exploring structural evolution during phase transitions under different processing conditions will provide insights for the metallurgy industry to generate materials with desired properties.  One of the most difficult issues is how to track the evolution of interfaces between different phases. The Phase-Field model overcomes this difficulty and has been successfully used for modeling solidifications of multi-component alloys. I simulated the microstructure evolution of Ni-Cu binary alloys during solidifications in 2D using the Phase-Field model (J. Fan, et al, PRE 74:031602 (2006)).  We found the solidification pattern and velocity strongly depend on undercoolings. A low undercoolings (a), dendritic patterns form and the concentration distribution around solid-liquid interfaces are consistent with those of the equilibrium phase diagram, while at high undercoolings (b), spherical patterns form and concentration distributions are out of equilibrium, consistent with the so-called solute drag effects.


						</p>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_15.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
										(a) Evolution of the concentration map of equiaxed dendrite structure obained at low supersaturation. (b) Evolution of the concentration map of uniform crystal morphology obained at high supersaturation.
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_16.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
										(c) Growth rate versus undercooling for different interface widths and solute diffusion coefficient. The inset is an enlargement of the low-undercooling protion of main figure. The "Analytical" data set refers to the solute trapping model of Aziz and co-works.
							</div>
						</div>

<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_17.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
										(d) Concentration versus position obtained at different undercoolings. The data have been shifted so that the interface posiitons line up.
							</div>
						</div>

<legend class="section-heading"> References </legend>
Jun Fan, Michael Greenwood, Mikko Haataja and Nikolas Provatas: Phase-field simulations of velocity selection in rapidly solidified binary alloys, <a href="http://pre.aps.org/abstract/PRE/v74/i3/e031602"> Phys. Rev. E. 74:031602 (2006)</a> 
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
