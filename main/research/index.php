<!DOCTYPE HTML>
<HTML>
<head>
<?php require('../inc_head.php'); ?>
<style type="text/css">
	.back-to-top {
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

	.vertical-center .col-sm-6 {
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
	    jQuery(window).scroll(function() {
	        if (jQuery(this).scrollTop() > offset) {
	            jQuery('.back-to-top').fadeIn(duration);
	        } else {
	            jQuery('.back-to-top').fadeOut(duration);
	        }
	    });
	    
	    jQuery('.back-to-top').click(function(event) {
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
					<div class="col-xs-12">
						<h2>Research Projects<hr></h2>
						<ol>
							<li><a href="#barph"><big>BAR-PH Protein</big></a></li>
							<li><a href="#cm"><big>Heterogeneous Lipid Membrane</big></a></li>
							<li><a href="#nept"><big>Non-Equilibrium Phase Transitions</big></a></li>
							<li><a href="#npamc"><big>Membrane Internalization of Nanoparticles</big></a></li>
							<li><a href="#afac"><big>Heterogenous Actin Filament</big></a></li>
						</ol>
					</div>
				</div>
				<hr style="border: 2px solid grey">
				<div class="row">
					<a name="barph"></a>
					<div class="col-xs-12">
						<legend> BAR-PH Protein </legend>
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
						<div class="row vertical-center">
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
				<hr style="border: 2px solid grey">
				<div class="row">
					<a name="cm"></a>
					<div class="col-xs-12">
						<legend>Heterogeneous Lipid Membrane</legend>
					</div>
					<div class="col-sm-12">
						<p>
							Lipid rafts are highly dynamic nano-scale entities in cell membranes. They are believed to participate many important cellular processes, such as signal transduction, membrane transport, protein sorting, as well as viral entry, budding, and assembly. However, the formation mechanism is not fully understood yet.
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_7.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
						(a)				 This cartoon summarizes equilibrium (A-C) and non-equilibrium (D-E)  formation mechanisms of rafts (in blue)  (J. Fan, et al, FEBS Letters 2010)
							</div>
						</div>
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_8.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
					(b)			Different raft formation mechanisms have been explored using continuum models: (I) critical temperature fluctuations; (II) membrane proteins pin the interface of rafts and non-rafts; (III) stochastic lipid transport above the critical temperature; (IV) stochastic lipid transport below the critical temperature; (V) membrane coupled to a lipid reservoir.  (J. Fan, et al, PRL 2010)
							</div>
						</div>

						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_9.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
								(c)	We found the combination of the structure factor and intensity correlation function can differentiate (I~V) apart. 
							</div>
						</div>

						<div class="row vertical-center">
							<div class="col-sm-6 text-center">
								<img style="width: 70%" class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_11.png" />
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
				<hr style="border: 2px solid grey">
				<div class="row">
					<a name="nept"></a>
					<div class="col-xs-12">
						<legend>Non-Equilibrium Phase Transitions </legend>
					</div>
					<div class="col-sm-12">
						<p>
							Exploring structural evolution during phase transitions under different processing conditions will provide insights for the metallurgy industry to generate materials with desired properties.  One of the most difficult issues is how to track the evolution of interfaces between different phases. The Phase-Field model overcomes this difficulty and has been successfully used for modeling solidifications of multi-component alloys. I simulated the microstructure evolution of Ni-Cu binary alloys during solidifications in 2D using the Phase-Field model (J. Fan, et al, PRE 74:031602 (2006)).  We found the solidification pattern and velocity strongly depend on undercoolings. A low undercoolings (a), dendritic patterns form and the concentration distribution around solid-liquid interfaces are consistent with those of the equilibrium phase diagram, while at high undercoolings (b), spherical patterns form and concentration distributions are out of equilibrium, consistent with the so-called solute drag effects.


						</p>
					</div>
					<div class="col-sm-12">
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_15.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
										(a) Evolution of the concentration map of equiaxed dendrite structure obained at low supersaturation. (b) Evolution of the concentration map of uniform crystal morphology obained at high supersaturation.
							</div>
						</div>
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_16.png" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
										(c) Growth rate versus undercooling for different interface widths and solute diffusion coefficient. The inset is an enlargement of the low-undercooling protion of main figure. The "Analytical" data set refers to the solute trapping model of Aziz and co-works.
							</div>
						</div>

						<div class="row vertical-center">
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

				<hr style="border: 2px solid grey">
				<div class="row">
					<a name="npacm"></a>
					<div class="col-xs-12">
						<legend> Membrane Internalization of Nanoparticles </legend>
					</div>
					<div class="col-sm-12">
						<p>
							Nano-particle has been be used to detect cancer cells. We built a continuum model to simulate the internalization process of nano-particles. (J. Meng, J. Fan, et al, MSEC 2009) 
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_13.png" />
							</div>
							<div class="col-sm-6">
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


				<hr style="border: 2px solid grey">
				<div class="row">
					<a name="afac"></a>
					<div class="col-xs-12">
						<legend>Heterogenous Actin Filament</legend>
					</div>
					<div class="col-sm-12">
						<p>
							Experiments have shown that actin is structurally polymorphic, but the details of molecular level heterogeneity in dynamics and inter-protein interActins are still lacking.  Here, using atomistic molecular dynamics (MD) simulations of the actin filament, we identify domains of atoms that move in a correlated fashion, quantify interActins between these domains using coarse-grained (CG) analysis methods, and perform coarse-grained simulations to explore the importance of heterogeneity.  (J. Fan, et al. Biophysical Journal 103:1334  (2012), DOI: 10.1016/j.bpj.2012.08.029 )
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_4.png" />
							</div>
							<div class="col-sm-6">
							<div class="tomakecenter"></div>
									(a) Initial structure of F-actin monomer; (b) Important water molecules forming a octahedron around Mg ion; (c) an effective infinite long actin filament fluctuates in a PBC water box under physiological conditions.
							</div>
						</div>
						<div class="row vertical-center">
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
						<legend> Cofilin Binds to & Reconfigures Actin Filament </legend>
					</div>
					<div class="col-sm-12">
						<p>
							 The actin regulatory protein cofilin plays a central role in actin assembly dynamics by severing filaments and increasing the concentration of ends from which subunits add and dissociate. Cofilin binding modifies the average structure and mechanical properties of actin filaments, 'thereby promoting fragmentation of partially decorated filaments at boundaries of bare and cofilin-decorated segments. Despite extensive evidence for cofilin-dependent changes in filament structure and mechanics, it is unclear how the two processes are linked at the molecular level. Here, we use molecular dynamics simulations and coarse-grained analyses to evaluate the molecular origins of the changes in filament compliance due to cofilin binding. Filament subunits with bound cofilin are less flat and maintain a significantly more open nucleotide cleft than bare filament subunits. Decorated filament segments are less twisted, thinner (considering only actin), and less connected than their bare counterparts, which lowers the filament bending persistence length and torsional stiffness. Using coarse-graining as an analysis method reveals that cofilin binding increases the average distance between the adjacent long-axis filament subunit, thereby weakening their interActin. In contrast, a frActin of lateral filament subunit contacts are closer and presumably stronger with cofilin binding. A cofilactin interface contact identified by cryo-electron microscopy is unstable during simulations carried out at 310 K, suggesting that this particular interActin may be short lived at ambient temperatures. These results reveal the molecular origins of cofilin-dependent changes in actin filament mechanics that may promote filament severing. (J. Fan, et al. J. of Molecular Biology 425:1225 (2013), DOI: 10.1016/j.jmb.2013.01.020, <a href="http://www.sciencedirect.com/science/article/pii/S0022283613000363" target="_blank">http://www.sciencedirect.com/science/article/pii/S0022283613000363</a> )
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/Heterogeneity of Actin Filament/shapeimage_6.jpg" />
							</div>
							<div class="col-sm-6">
							<div class="tomakecenter"></div>
							There are fewer contacts in the cofilactin filament than in the bare actin filament, and these occur within a smaller radius. Visualization of (a) bare, (b) cofilactin, and (c) cofilactin filaments, omitting the cofilin proteins, (d) a cross section of the interface of bare filament, and (e) a cross section of the interface of a cofilactin filament. The actin subunits at the cross section are labeled with n, n + 1, or n + 2, in the direction from the barbed to the pointed ends of the filament, and are plotted in red, blue, and pink, respectively. Cofilin proteins are presented in green. Actin subdomain 2 is highlighted with a yellow circle for each subunit. Comparison of (d) and (e) shows that the binding of cofilin disrupts interActins between filament subunits, that is, n–SD2 and n + 2–SD1/SD3. The distribution of total number of contacts of a half-twist of bare filament and cofilactin filament is projected onto the plane perpendicular to the filament long axis shown in (f) and (g). This distribution is further projected onto a single, radial dimension, which is plotted in (h) and (i) and which shows the total contact number as a function of the distance to the filament axis.
							</div>
						</div>
						<div class="row vertical-center">
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
</body>
</HTML>
