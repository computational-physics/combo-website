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
					<div class="col-xs-12">
						<h2>Research Projects<hr></h2>
						<p>
							My long-term research goal is to explore molecular mechanisms of cellular systems and materials as well 
							as to develop new computational tools in order to understand fundamental physical principles behind 
							biological and materials phenomena.
						</p>
						<ol>
							<li><a href="#barph"><big>BAR Domain in Promoting Membrane Curvature</big></a></li>
							<li><a href="#trtituvb"><big>The role of tryptophans in the UV-B absorption of a UVR8 photoreceptor</big></a></li>
							<li><a href="#gcnsn"><big>Graphitic carbon nitride solid nanofilms for selective and recyclable sensing of Cu2+ and Ag+ in water and serum</big></a></li>
							<li><a href="#afac"><big>Heterogenous Actin Filament</big></a></li>
							<li><a href="#cm"><big>Heterogeneous Lipid Membrane</big></a></li>
							<li><a href="#npamc"><big>Membrane Internalization of Nanoparticles</big></a></li>
							<li><a href="#nept"><big>Non-Equilibrium Phase Transitions</big></a></li>
						</ol>
					</div>
				</div>


				<hr style="border: 2px solid grey">

				<!-- ===== -->
				<!-- BARPH -->
				<!-- ===== -->

				<div class="row">
					<a name="barph"></a>
					<div class="col-xs-12">
						<legend> BAR Domain in Promoting Membrane Curvature </legend>
					</div>
					<div class="col-sm-12">
						<p> 
							The BAR (Bin-Amphiphysin-Rvs) domain undergoes dimerization to produce a curved protein structure, 
							which superimposes onto membrane through electrostatic interactions to sense and impart membrane curvature. 
							In some cases, a BAR domain also possesses an amphipathic helix that inserts into the membrane to induce 
							curvature. ACAP1 (Arfgap with Coil coil, Ankyrin repeat, and PH domain protein 1) contains a BAR domain. 
							Here, we show that this BAR domain can neither bind membrane nor impart curvature, 
							but instead requires a neighboring PH (Pleckstrin Homology) domain to achieve these functions. 
							Specific residues within the PH domain are responsible for both membrane binding and curvature generation. 
							The BAR domain adjacent to the PH domain instead interacts with the BAR domains of neighboring ACAP1 proteins to enable clustering at the membrane. Thus, we have uncovered the molecular basis for an unexpected and unconventional collaboration between PH and BAR domains in membrane bending.
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								
							</div>
						</div>
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/research/barph.1.jpg" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
								<p>
								<ul>
									<li>The BAR domain in ACAP1 is not sufficient to bend membrane</li>
									<li>The neighboring PH domain promotes membrane binding and bending</li>
									<li>The BAR domain controls ACAP1 clustering</li>
									<li>Structural and simulation studies shed insights into how the PH domain acts</li>
								</ul>
								</p>
							</div>
						</div>
						<div class="row vertical-center">
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
								<p>
								Molecular Simulation of ACAP1<sup>BAR-PH</sup> Binding to Membrane
								<br />(C) Comparison of the crystal structure (shown in orange) and the final simulated model (shown in cyan and purple) of dimeric ACAP1<sup>BAR-PH</sup> interacting with the membrane bilayer. Only the phosphate atoms of phospholipids in the membrane are shown for simplification.
								<br />(D) A zoomed-in view of (C), focusing on the PH domain engaging the membrane. The BAR and PH domains are shown as cartoon representation and colored in cyan and purple, respectively. The critical residue (F280) in Loop1 is shown embedded in membrane and represented in yellow. The phosphate atoms of the membrane phospholipids are shown as gray spheres.
								<br />(E) Electrostatic surface representation of the PH domain shown in the configuration illustrated in (D). Blue coloring highlights positive charges, while red coloring highlights negative charges.
								<br />(F) A 90° rotation of image shown in (E) to better visualize the membrane-binding surface of the PH domain. The positively charged patches (sites 1 and 2) and the hydrophobic insertion site (Loop1) are indicated.
								</p>
							</div>
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/research/barph.2.jpg" />
							</div>
						</div>

						<legend class="section-heading"> References </legend>

						<ul>
                            <li>Chun Chan, Haohua Wen, Lanyuan Lu, and <u><b>Jun Fan</b></u>*, Multiscale molecular dynamics simulations membrane remodeling by BAR family proteins, <a href="http://cpb.iphy.ac.cn/EN/abstract/abstract66287.shtml">Chinese Physics B, 25:018707</a> (invited review, 2016)</li>
							<li>
                                Xiaoyun Pang, <u><b>Jun Fan</b></u>, Yan Zhang, Kai Zhang, Bingquan Gao, Jun Ma, Jian Li, Yuchen Deng, Qiangjun Zhou, Edward H. Egelman, Victor W. Hsu, Fei Sun: A PH Domain in ACAP1 Possesses Key Features of the BAR Domain in Promoting Membrane Curvature, <a href="http://www.sciencedirect.com/science/article/pii/S1534580714005504">Developmental Cell, 31:73-86 (2014)</a>
                                <i>Highlighted in <a href="http://www.sciencedirect.com/science/article/pii/S1534580714006224">A Novel Twist in Membrane dePHormation</a></i>
                            </li>
						</ul>
					</div>
				</div>

				<hr style="border: 2px solid grey">

				<!-- ===== -->
				<!-- The role of tryptophans in the UV-B absorption of a UVR8 photoreceptor  -->
				<!-- ===== -->

				<div class="row">
					<a name="trtituvb"></a>
					<div class="col-xs-12">
						<legend> The role of tryptophans in the UV-B absorption of a UVR8 photoreceptor </legend>
					</div>
					<div class="col-sm-12">
						<p> 
							Arabidopsis thaliana UV RESISTANCE LOCUS8 (UVR8) has been identified as a photoreceptor for ultraviolet-B (UV-B). Tryptophan (Trp) residues have been shown to play a critical role in the response to UV-B irradiation in UVR8. In this work, we explore the spectroscopic behaviors of Trps in different protein environments of the UVR8 structure using the time-dependent density functional tight-binding (TD-DFTB) scheme. We show that W233 exhibits the longest absorption wavelength, highlighting its potential as a terminal Trp chromophore in the UV-B harvesting antenna. Our electronic and optical property analyses using various amino acid models support the important roles of W285 and W233 in sensing UV-B light at longer absorption wavelengths (∼290 nm). We also provide evidence for the specific function of W94 in absorption at the longest wavelengths (305.8 nm in cluster II and 304.5 nm in cluster III). To these findings, we also add information about the influence of the arginine and aspartic acid residues surrounding the Trp pyramid on the particular absorption bands (280–300 nm) that are characteristic of the UV-B photoreceptor.	
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row vertical-center">
							<div class="col-sm-6">
								<img class="col-xs-12" src="../img/research/trtituvb.1.gif" />
							</div>
							<div class="col-sm-6">
								<div class="tomakecenter"></div>
								<p>
									Structural model of UVR8 (residues 13-381): (a) side view of the arrangement of tryptophan (W) residues, excluding W400. Tryptophan residues located in the protein core are depicted in blue, whereas those in red reside at the homodimeric interface. (b) As in (a), but viewed from the dimeric interaction surface. (c) Top view of the protein core tryptophan residues. (d) Top view of the tryptophan residues at the homodimeric interface. Residues that constitute the tryptophan triad are depicted in magenta.
								</p>
							</div>
						</div>
						<div class="row vertical-center">
							<div class="col-sm-5">
								<img class="img-responsive" src="../img/research/trtituvb.2.gif">
								<p class="text-center">
									Configuration of clusters used for calculations of UV absorption spectra of UVR8.
								</p>
							</div>
							<div class="col-sm-7">
								<div class="tomakecenter"></div>
								<img class="img-responsive" style="width:100%" src="../img/research/trtituvb.3.gif">
								<p class="text-center">
									Spectra of the UVR8 amino acid cluster models.
								</p>
							</div>
						</div>

						<legend class="section-heading"> References </legend>

						<ul>
                            <li>Qi Wu, Bolong Huang, T. A. Niehaus, Xiaojing Yang, <u><b>Jun Fan</b></u>* and Rui-Qin Zhang: The role of tryptophans in the UV-B absorption of a UVR8 photoreceptor - a computational study. <a href="http://pubs.rsc.org/en/Content/ArticleLanding/2015/CP/C4CP06073C#!divAbstract">Phys. Chem. Chem. Phys., 17: 10786-10794. DOI: 10.1039/C4CP06073C (2015)</a></li>
                            <li>Xiaoli Zeng, Zhong Ren, Qi Wu, <u> <b>Jun Fan</b></u>, Pan-Pan Peng, Kun Tang, Ruiqin Zhang, Kai-Hong Zhao, and Xiaojing Yang: Dynamic Crystallography Reveals Early Signaling Events in Ultraviolet Photoreceptor UVR8. <a href="http://www.nature.com/articles/nplants20146">Nature Plants, 1(1):14006. DOI: 10.1038/nplants.2014.6 (2015)</a></li>
						</ul>
					</div>
				</div>

				<hr style="border: 2px solid grey">

				<!-- ===== -->
				<!-- Graphitic carbon nitride solid nanofilms for selective and recyclable sensing of Cu2+ and Ag+ in water and serum  -->
				<!-- ===== -->

				<div class="row">
					<a name="gcnsn"></a>
					<div class="col-xs-12">
						<legend> Graphitic carbon nitride solid nanofilms for selective and recyclable sensing of Cu2+ and Ag+ in water and serum </legend>
					</div>
					<div class="col-sm-12">
						<p> 
							Herein we report the fabrication of g-C3N4 nanofilms and their application as a solid fluorescence sensor. The as-prepared films are capable of convenient, sensitive, selective, rapid and recyclable sensing of Cu2+ and Ag+ in water and serum, indicating the sensor's potential application in disease diagnosis. Attractively, our sensor is able to differentiate Cu2+ and Ag+ by making use of their different adsorption and desorption kinetics during the interaction with g-C3N4 nanofilms.
						</p>
					</div>
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-12 text-center">
								<img class="img-responsive" src="../img/research/gcnsn.1.gif">
							</div>
						</div>

						<legend class="section-heading"> References </legend>

						<ul>
        					<li>Heqin Huang, Rui Chen, Jiale Ma, Li Yan, Yingqi Zhao, Yu Wang, Wenjun Zhang, <u><b>Jun Fan</u></b>*,  and Xianfeng Chen: Graphitic carbon nitride solid nanofilms for selective and recyclable sensing of Cu2+ and Ag+ in water and serum, <a href="http://pubs.rsc.org/en/content/articlelanding/2014/cc/c4cc06659f#!divAbstract">Chem. Commun. 50:15415-15418 (2014)</a></li>
						</ul>
					</div>
				</div>

				<hr style="border: 2px solid grey">

				<!-- ===== -->
				<!-- Heterogenous Actin Filament -->
				<!-- ===== -->

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
						<ul>
							<li>Jun Fan, Marissa G. Saunders, Enrique M. De La Cruz, Gregory A. Voth:  Molecular origins of cofilin-induced actin filament mechanics, <a href="http://www.sciencedirect.com/science/article/pii/S0022283613000363"> Journal of Molecular Biology, 425:1225 (2013) </a></li>
							<li>Jun Fan, Marissa G. Saunders, Gregory A. Voth: Coarse-graining provides insights on the essential nature of heterogeneity in actin filaments, <a href="http://www.ncbi.nlm.nih.gov/pubmed/22995506"> Biophysical Journal, 103:1334 (2012) </a></li>
						</ul>
					</div>

				</div>

				<!-- ==== -->
				<!-- Heterogeneous Lipid Membrane -->
				<!-- ==== -->

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
						<ul>
							<li>Jun Fan, Tao Han, Mikko Haataja: Hydrodynamic Effects on Spinodal Decomposition Kinetics in Lipid Bilayer Membranes, <a href="http://jcp.aip.org/resource/1/jcpsa6/v133/i23/p235101_s1">J. Chem. Phys. 133:235101 (2010) </a></li>
							<li>Jun Fan, Maria Sammalkorpi, Mikko Haataja: Lipid microdomains: Structural correlations, Fluctuations, and Formation Mechanisms, <a href="http://prl.aps.org/abstract/PRL/v104/i11/e118101"> Phys. Rev. Lett. 104: 118101. (2010)</a></li>
							<li>Jun Fan, Maria Sammalkorpi, Mikko Haataja: Formation and Regulation of Lipid Microdomains in Cell Membranes: Theory, Modeling, and Speculation, <a href="http://www.ncbi.nlm.nih.gov/pubmed/19854186">FEBS Letters. 584: 1678 (invited review paper) (2010) </a></li>
							<li>Jun Fan, Maria Sammalkorpi, Mikko Haataja: Influence of non-equilibrium lipid transport, membrane compartmentalization, and membrane proteins on the lateral organization of the plasma membrane, <a href="http://pre.aps.org/abstract/PRE/v81/i1/e011908"> Phys. Rev. E. 81:011908 (2009) </a></li>
							<li>Jun Fan and Maria Sammalkorpi, Mikko Haataja: Domain Formation in the Plasma Membrane: Roles of Non-equilibrium Lipid Transport and Membrane Proteins, <a href="http://prl.aps.org/abstract/PRL/v100/i17/e178102">Phys. Rev. Lett. 100:178102 (2008)</a></li>
						</ul>
					</div>
				</div>

				<!-- ===== -->
				<!-- Membrane Internalization of Nanoparticles -->
				<!-- ===== -->

				<hr style="border: 2px solid grey">
				<div class="row">
					<a name="npamc"></a>
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
					    <ul>
							<li>Juan Meng, <b>Jun Fan</b>, et al: LHRH-functionalized superparamagnetic iron oxide nanoparticles for breast cancer targeting and contrast enhancement in MRI, <a href="http://www.sciencedirect.com/science/article/pii/S0928493108002555"> Materials Science and Engineering C, 29:1467-1479 (2009) </a></li>
						</ul>
					</div>
				</div>

				<!-- ===== -->
				<!-- Non-Equilibrium Phase Transitions -->
				<!-- ===== -->
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
						<ul>
							<li>Jun Fan, Michael Greenwood, Mikko Haataja and Nikolas Provatas: Phase-field simulations of velocity selection in rapidly solidified binary alloys, <a href="http://pre.aps.org/abstract/PRE/v74/i3/e031602"> Phys. Rev. E. 74:031602 (2006)</a> </li>
						</ul>
					</div>
				</div>

			</div>
		</div>

	</div>

	<?php require('../inc_footer.php') ?>
</body>
</HTML>
