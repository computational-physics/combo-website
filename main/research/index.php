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
						<p style="text-align: justify">
							My long-term research goal is to explore molecular mechanisms of cellular systems and materials as well 
							as to develop new computational tools in order to understand fundamental physical principles behind 
							biological and materials phenomena.
						</p>
						<ol>
							<li><a href="#MembProtein"><big>Protein-Lipid Interactions</big></a></li>
							<li><a href="#BioNano"><big>Bio-Nano Interactions</big></a></li>
							<li><a href="#Materials"><big>Physics in Energy Materials and Interfaces</big></a></li>
							
							<!-- 
							<li><a href="#barph"><big>BAR Domain in Promoting Membrane Curvature</big></a></li>
							<li><a href="#trtituvb"><big>The role of tryptophans in the UV-B absorption of a UVR8 photoreceptor</big></a></li>
							<li><a href="#gcnsn"><big>Graphitic carbon nitride solid nanofilms for selective and recyclable sensing of Cu2+ and Ag+ in water and serum</big></a></li>
							<li><a href="#afac"><big>Heterogenous Actin Filament</big></a></li>
							<li><a href="#cm"><big>Heterogeneous Lipid Membrane</big></a></li>
							<li><a href="#npamc"><big>Membrane Internalization of Nanoparticles</big></a></li>
							<li><a href="#nept"><big>Non-Equilibrium Phase Transitions</big></a></li>
							-->
						</ol>
					</div>
				</div>


				<hr style="border: 2px solid grey">
				

				<!-- ===== -->
				<!-- MembProtein -->
				<!-- ===== -->

				<div class="row">
					<a name="MembProtein"></a>
					<div class="col-xs-12">
						<legend> Protein-Lipid Interactions </legend>
					</div>
					<div class="col-sm-12">
						<p style="text-align: justify"><b>
							Peripheral membrane proteins and transmembrane proteins could influence the physical state and functions of lipids, and vice versa.
							Utilizing molecular dynamics (MD) simulations and other computational analyses, we aim to explore the relationship or coupling between proteins and lipids, including the membrane remodeling by BAR (Bin-Amphiphysin-Rvs) family proteins, 
							the reversible gating of protein channels stimulated by the lateral pressure of lipid membranes, etc.
						</b></p>
						<p style="text-align: justify">
							The BAR (Bin-Amphiphysin-Rvs) domain undergoes dimerization to produce a curved protein structure, 
							which superimposes onto membrane through electrostatic interactions to sense and impart membrane curvature. 
							In some cases, a BAR domain also possesses an amphipathic helix that inserts into the membrane to induce 
							curvature. ACAP1 (Arfgap with Coil coil, Ankyrin repeat, and PH domain protein 1) contains a BAR domain. 
							Here, we show that this BAR domain can neither bind membrane nor impart curvature, 
							but instead requires a neighboring PH (Pleckstrin Homology) domain to achieve these functions. 
							Specific residues within the PH domain are responsible for both membrane binding and curvature generation. 
							The BAR domain adjacent to the PH domain instead interacts with the BAR domains of neighboring ACAP1 proteins to enable clustering at the membrane. 
							Thus, we have uncovered the molecular basis for an unexpected and unconventional collaboration between PH and BAR domains in membrane bending.
						</p>

						<img class="img-responsive" src="../img/research/MembProtein.jpg" />
						
						<legend class="section-heading"> References </legend>
						<ul style="text-align: justify">
                        	<li>Chun Chan, Lanyuan Lu, Fei Sun, Jun Fan*, <u><a href="http://pubs.acs.org/doi/abs/10.1021/acs.jpcb.6b09563">Molecular Details of the PH Domain of ACAP1 BAR-PH Protein Binding to PIP-Containing Membrane</a></u>, <b><i>J. Phys. Chem. B</i></b>, 121: 3586-3596 (2017)</li>						
                            <li>Chun Chan, Haohua Wen, Lanyuan Lu, and Jun Fan*, <u><a href="http://cpb.iphy.ac.cn/EN/abstract/abstract66287.shtml">Multiscale molecular dynamics simulations membrane remodeling by BAR family proteins</a></u>, <b><i>Chinese Physics B</i></b>, 25: 018707 (2016), invited review</li>						
        					<li>Xiaoyun Pang, Jun Fan, Yan Zhang, Kai Zhang, Bingquan Gao, Jun Ma, Jian Li, Yuchen Deng, Qiangjun Zhou, Edward H. Egelman, Victor W. Hsu, Fei Sun. <u><a href="http://www.sciencedirect.com/science/article/pii/S1534580714005504">A PH Domain in ACAP1 Possesses Key Features of the BAR Domain in Promoting Membrane Curvature</a></u>, <b><i>Dev. Cell</i></b>, 31: 73-86 (2014)
                                <i>Highlighted in <a href="http://www.sciencedirect.com/science/article/pii/S1534580714006224">A Novel Twist in Membrane dePHormation</a></i>
                            </li>
						</ul>						
					</div>
				</div>
			

			
				<hr style="border: 2px solid grey">
				
				
				
				<!-- ===== -->
				<!-- BioNano -->
				<!-- ===== -->

				<div class="row">
					<a name="BioNano"></a>
					<div class="col-xs-12">
						<legend> Bio-Nano Interactions </legend>
					</div>
					<div class="col-sm-12">
						<p style="text-align: justify"><b>
							As the rapid development of nanomaterials and their emerging biomedical and biological applications such as drug/gene delivery and nanosensing, 
							the interaction between nanomaterials and biological entities plays an increasingly important role in nanoscience. In particular, bio-nano interactions could interfere functions of proteins, lipids, 
							etc., and even damage the structural integrity of cells. Thus, the cytotoxicity of nanomaterials has caused serious concerns over the safety and sustainability of nanotechnology. 
							On the other hand, the toxicity of nanomaterials can also be utilized in antibacterial and antifouling applications.
							We perform MD simulations to study the interaction between nanoparticles/nanotubes/nanosheets and lipid membranes/proteins/DNA/organelles, providing insights into physics in bio-nano systems. 
						</b></p>
						<p style="text-align: justify">
							We have studied the interaction between 2D nanomaterials (nanosheets) and lipid membranes recently. Hydrophobic nanosheets could extract lipids and then insert into lipid membranes, which is very important 
							for the cytotoxicity of nanosheets. Interestingly, we found that the lipid extraction behavior depends on the phase state of lipids that can be changed by temperature, lipid components, etc. In addition, 
							the insertion of nanosheets into lipid membranes could lead to the ordering of lipids, which may perturb the function of transmembrane proteins.
						</p>
						
						<img class="img-responsive" src="../img/research/BioNano.jpg" />
						
						<legend class="section-heading"> References </legend>
						<ul style="text-align: justify">
							<li>Yonghui Zhang, Chun Chan, Zhen Li, Jia Le Ma, Qiangqiang Meng, Xiaolin Cheng, and Jun Fan*, <u>Lipid Extraction by Boron Nitride Nanosheets from Liquid-ordered and Liquid-disordered Nanodomains</u>, <b><i>Nanoscale</i></b>, Accepted (2018)</li>
                            <li>Zhen Li, Yonghui Zhang, Chun Chan, Chunyi Zhi, Xiaolin Cheng, and Jun Fan*, <u><a href="https://pubs.acs.org/doi/10.1021/acsnano.7b09095">Temperature-Dependent Lipid Extraction from Membranes by Boron Nitride Nanosheets</a></u>, <b><i>ACS Nano</i></b>, 12: 2764-2772 (2018) </li>
                            <li>Yonghui Zhang, Zhen Li, Chun Chan, Jiale Ma, Chunyi Zhi, Xiaolin Cheng, and Jun Fan*, <u><a href="http://pubs.rsc.org/en/content/articlelanding/2017/cp/c7cp07136a#!divAbstract">Ordering of Lipid Membranes Altered by Boron Nitride Nanosheet</a></u>, <b><i>Phys. Chem. Chem. Phys.</i></b>, 20: 3903-3910 (2018), inside cover</li>
						</ul>
				
					</div>
				</div>
				
				
				
				<hr style="border: 2px solid grey">
				
				
				<!-- ===== -->
				<!-- BioNano -->
				<!-- ===== -->

				<div class="row">
					<a name="Materials"></a>
					<div class="col-xs-12">
						<legend> Physics in Energy Materials and Interfaces </legend>
					</div>
					<div class="col-sm-12">
						<!--
						<p style="text-align: justify"><b>
							Peripheral membrane proteins and transmembrane proteins could influence the physical state and functions of lipids, and vice versa.
							We aim to explore the relationship or coupling between proteins and lipids, including the membrane remodeling by BAR (Bin-Amphiphysin-Rvs) family proteins, 
							the reversible gating of protein channels stimulated by the lateral pressure of lipid membranes, etc.
						</b></p>
						<p style="text-align: justify">
							The BAR (Bin-Amphiphysin-Rvs) domain undergoes dimerization to produce a curved protein structure, 
							which superimposes onto membrane through electrostatic interactions to sense and impart membrane curvature. 
							In some cases, a BAR domain also possesses an amphipathic helix that inserts into the membrane to induce 
							curvature. ACAP1 (Arfgap with Coil coil, Ankyrin repeat, and PH domain protein 1) contains a BAR domain. 
							Here, we show that this BAR domain can neither bind membrane nor impart curvature, 
							but instead requires a neighboring PH (Pleckstrin Homology) domain to achieve these functions. 
							Specific residues within the PH domain are responsible for both membrane binding and curvature generation. 
							The BAR domain adjacent to the PH domain instead interacts with the BAR domains of neighboring ACAP1 proteins to enable clustering at the membrane. 
							Thus, we have uncovered the molecular basis for an unexpected and unconventional collaboration between PH and BAR domains in membrane bending.
						</p>
						
						<img class="img-responsive" src="../img/research/MembProtein.jpg" />

						<ul>
                        	<li>Chun Chan, Lanyuan Lu, Fei Sun, Jun Fan*, <u><a href="http://pubs.acs.org/doi/abs/10.1021/acs.jpcb.6b09563">Molecular Details of the PH Domain of ACAP1 BAR-PH Protein Binding to PIP-Containing Membrane</a></u>, <b><i>J. Phys. Chem. B</i></b>, 121: 3586-3596 (2017)</li>						
                            <li>Chun Chan, Haohua Wen, Lanyuan Lu, and Jun Fan*, <u><a href="http://cpb.iphy.ac.cn/EN/abstract/abstract66287.shtml">Multiscale molecular dynamics simulations membrane remodeling by BAR family proteins</a></u>, <b><i>Chinese Physics B</i></b>, 25: 018707 (2016), invited review</li>						
        					<li>Xiaoyun Pang, Jun Fan, Yan Zhang, Kai Zhang, Bingquan Gao, Jun Ma, Jian Li, Yuchen Deng, Qiangjun Zhou, Edward H. Egelman, Victor W. Hsu, Fei Sun. <u><a href="http://www.sciencedirect.com/science/article/pii/S1534580714005504">A PH Domain in ACAP1 Possesses Key Features of the BAR Domain in Promoting Membrane Curvature</a></u>, <b><i>Dev. Cell</i></b>, 31: 73-86 (2014)
                                <i>Highlighted in <a href="http://www.sciencedirect.com/science/article/pii/S1534580714006224">A Novel Twist in Membrane dePHormation</a></i>
                            </li>
						</ul>
						-->
						<p style="text-align: justify">
							coming soon ...
						</p>
						
					</div>
				</div>
			
			
			
				
				
				
			</div>
		</div>
	</div>



	<?php require('../inc_footer.php') ?>
</body>
</HTML>
