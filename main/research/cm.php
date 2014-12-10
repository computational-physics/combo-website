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
						<h1> Heterogeneous Lipid Membrane </h1>
					</div>
					<div class="col-sm-12">
						<p>
							Lipid rafts are highly dynamic nano-scale entities in cell membranes. They are believed to participate many important cellular processes, such as signal transduction, membrane transport, protein sorting, as well as viral entry, budding, and assembly. However, the formation mechanism is not fully understood yet.
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_7.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
						(a)				 This cartoon summarizes equilibrium (A-C) and non-equilibrium (D-E)  formation mechanisms of rafts (in blue)  (J. Fan, et al, FEBS Letters 2010)
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_8.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
					(b)			Different raft formation mechanisms have been explored using continuum models: (I) critical temperature fluctuations; (II) membrane proteins pin the interface of rafts and non-rafts; (III) stochastic lipid transport above the critical temperature; (IV) stochastic lipid transport below the critical temperature; (V) membrane coupled to a lipid reservoir.  (J. Fan, et al, PRL 2010)
							</div>
						</div>

	<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_9.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
					(c)	We found the combination of the structure factor and intensity correlation function can differentiate (I~V) apart. 
							</div>
						</div>

	<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_11.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
(d) Hydrodynamic Effects on Spinodal Decomposition Kinetics in Lipid Membranes: Numerical simulations reveal that dynamical scaling breaks down for critical lipid mixtures due to distinct coarsening mechanisms for elongated versus more isotropic compositional lipid domains. The breakdown in scaling should be readily observable in experiments on model membrane systems. (J. Fan, et al, JCP 2010)
							</div>
						</div>
<legend class="section-heading"> References </legend>

Jun Fan, Tao Han, Mikko Haataja: Hydrodynamic Effects on Spinodal Decomposition Kinetics in Lipid Bilayer Membranes, <a href="http://jcp.aip.org/resource/1/jcpsa6/v133/i23/p235101_s1">J. Chem. Phys. 133:235101 (2010) </a>
</br>
Jun Fan, Maria Sammalkorpi, Mikko Haataja: Lipid microdomains: Structural correlations, Fluctuations, and Formation Mechanisms, <a href="http://prl.aps.org/abstract/PRL/v104/i11/e118101"> Phys. Rev. Lett. 104: 118101. (2010)</a>
</br>
Jun Fan, Maria Sammalkorpi, Mikko Haataja: Formation and Regulation of Lipid Microdomains in Cell Membranes: Theory, Modeling, and Speculation, <a href="http://www.ncbi.nlm.nih.gov/pubmed/19854186">FEBS Letters. 584: 1678 (invited review paper) (2010) 
</a> </br>
Jun Fan, Maria Sammalkorpi, Mikko Haataja: Influence of non-equilibrium lipid transport, membrane compartmentalization, and membrane proteins on the lateral organization of the plasma membrane, <a href="http://pre.aps.org/abstract/PRE/v81/i1/e011908"> Phys. Rev. E. 81:011908 (2009) </a>
</br>
Jun Fan and Maria Sammalkorpi, Mikko Haataja: Domain Formation in the Plasma Membrane: Roles of Non-equilibrium Lipid Transport and Membrane Proteins, <a href="http://prl.aps.org/abstract/PRL/v100/i17/e178102">Phys. Rev. Lett. 100:178102 (2008)</a>
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
