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
						<h1>Heterogenous Actin Filament</h1>
					</div>
					<div class="col-sm-12">
						<p>
							Experiments have shown that actin is structurally polymorphic, but the details of molecular level heterogeneity in dynamics and inter-protein interActins are still lacking.  Here, using atomistic molecular dynamics (MD) simulations of the actin filament, we identify domains of atoms that move in a correlated fashion, quantify interActins between these domains using coarse-grained (CG) analysis methods, and perform coarse-grained simulations to explore the importance of heterogeneity.  (J. Fan, et al. Biophysical Journal 103:1334  (2012), DOI: 10.1016/j.bpj.2012.08.029 )
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_4.png" />
							</div>
							<div class="col-sm-6">
							<div class="tomakecenter"></div>
									(a) Initial structure of F-actin monomer; (b) Important water molecules forming a octahedron around Mg ion; (c) an effective infinite long actin filament fluctuates in a PBC water box under physiological conditions.
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_5.png" />
							</div>
							<div class="col-sm-6">
							<div class="tomakecenter"></div>
										(a) Unfolded to folded D-loop transition has been observed in our MD simulation, indicating the transition energy barrier may not be high;  (b-d) Different unfolded D-loop configurations, showing D-loop is highly dynamics. 
							</div>

						</div>
					</div>



					<div class="col-xs-12">
						<h1> Cofilin Binds to & Reconfigures Actin Filament </h1>
					</div>
					<div class="col-sm-12">
						<p>
							 The actin regulatory protein cofilin plays a central role in actin assembly dynamics by severing filaments and increasing the concentration of ends from which subunits add and dissociate. Cofilin binding modifies the average structure and mechanical properties of actin filaments, 'thereby promoting fragmentation of partially decorated filaments at boundaries of bare and cofilin-decorated segments. Despite extensive evidence for cofilin-dependent changes in filament structure and mechanics, it is unclear how the two processes are linked at the molecular level. Here, we use molecular dynamics simulations and coarse-grained analyses to evaluate the molecular origins of the changes in filament compliance due to cofilin binding. Filament subunits with bound cofilin are less flat and maintain a significantly more open nucleotide cleft than bare filament subunits. Decorated filament segments are less twisted, thinner (considering only actin), and less connected than their bare counterparts, which lowers the filament bending persistence length and torsional stiffness. Using coarse-graining as an analysis method reveals that cofilin binding increases the average distance between the adjacent long-axis filament subunit, thereby weakening their interActin. In contrast, a frActin of lateral filament subunit contacts are closer and presumably stronger with cofilin binding. A cofilactin interface contact identified by cryo-electron microscopy is unstable during simulations carried out at 310 K, suggesting that this particular interActin may be short lived at ambient temperatures. These results reveal the molecular origins of cofilin-dependent changes in actin filament mechanics that may promote filament severing. (J. Fan, et al. J. of Molecular Biology 425:1225 (2013), DOI: 10.1016/j.jmb.2013.01.020, <a href="http://www.sciencedirect.com/science/article/pii/S0022283613000363" target="_blank">http://www.sciencedirect.com/science/article/pii/S0022283613000363</a> )
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_6.jpg" />
							</div>
							<div class="col-sm-6">
							<div class="tomakecenter"></div>
							There are fewer contacts in the cofilactin filament than in the bare actin filament, and these occur within a smaller radius. Visualization of (a) bare, (b) cofilactin, and (c) cofilactin filaments, omitting the cofilin proteins, (d) a cross section of the interface of bare filament, and (e) a cross section of the interface of a cofilactin filament. The actin subunits at the cross section are labeled with n, n + 1, or n + 2, in the direction from the barbed to the pointed ends of the filament, and are plotted in red, blue, and pink, respectively. Cofilin proteins are presented in green. Actin subdomain 2 is highlighted with a yellow circle for each subunit. Comparison of (d) and (e) shows that the binding of cofilin disrupts interActins between filament subunits, that is, n–SD2 and n + 2–SD1/SD3. The distribution of total number of contacts of a half-twist of bare filament and cofilactin filament is projected onto the plane perpendicular to the filament long axis shown in (f) and (g). This distribution is further projected onto a single, radial dimension, which is plotted in (h) and (i) and which shows the total contact number as a function of the distance to the filament axis.
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_3.jpg" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
										(a) Each actin subunit is CG into one bead. (b) Each strand (one shown in red, the other in blue) is fitted to a curve using cubic spline. (c) The center of i ? 1 and i + 1 on the blue curve, i?, is the projection of the bead i of the red curve; the filament twist axis is defined by the black curve, which is connected by the center of each bead and its projection.
							</div>

						</div>
 <legend class="section-heading"> References </legend>

Jun Fan, Marissa G. Saunders, Enrique M. De La Cruz, Gregory A. Voth:  Molecular origins of cofilin-induced actin filament mechanics, <a href="http://www.sciencedirect.com/science/article/pii/S0022283613000363"> Journal of Molecular Biology, 425:1225 (2013) </a>
</br>
Jun Fan, Marissa G. Saunders, Gregory A. Voth: Coarse-graining provides insights on the essential nature of heterogeneity in actin filaments, <a href="http://www.ncbi.nlm.nih.gov/pubmed/22995506"> Biophysical Journal, 103:1334 (2012) </a>
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
