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
						<h1> BAR-PH Protein </h1>
					</div>
					<div class="col-sm-12">
						<p> BAR-PH is a magic protein which binds to membrane and reshapes it.
							(on-going )
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_2.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
										Top view and side view of BAR-PH protein; Molecular dnamics simulation can caputure atomistic detail of protein-membrane binding interface and reveal significant interting groups of atoms. 
							</div>
						</div>

 <legend class="section-heading"> References </legend>

Xiaoyun Pang, <u> <b>Jun Fan</b></u>, Yan Zhang, Kai Zhang, Bingquan Gao, Jun Ma, Jian Li, Yuchen Deng, Qiangjun Zhou, Edward H. Egelman, Victor W. Hsu, Fei Sun: A PH Domain in ACAP1 Possesses Key Features of the BAR Domain in Promoting Membrane Curvature, <a href="">Developmental Cell, 31:73-86 (2014)</a>
</br>



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
