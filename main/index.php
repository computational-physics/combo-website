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
                <li data-target="#carousel-slider" data-slide-to="3"></li>
                <li data-target="#carousel-slider" data-slide-to="4"></li>
                <li data-target="#carousel-slider" data-slide-to="5"></li>
                <li data-target="#carousel-slider" data-slide-to="6"></li>
                <li data-target="#carousel-slider" data-slide-to="7"></li>
				<li data-target="#carousel-slider" data-slide-to="8"></li>
                <li data-target="#carousel-slider" data-slide-to="9"></li>
                <!--<li data-target="#carousel-slider" data-slide-to="10"></li>-->
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
                <div class="item active">
                    <img src="img/slides/slide-2018-1.jpg">
                </div>
                <div class="item">
                    <img src="img/slides/slide-hpc-workshop-dec-2015.jpg">
                </div>
                <div class="item">
                    <img src="img/slides/slide-michael-greenwood.jpg">
                </div>
                <div class="item">
                    <img src="img/slides/slide-cityu-30.jpg">
                </div>
                <div class="item">
                    <img src="img/slides/slide-barph.jpg">
                </div>
                <div class="item">
                    <img src="img/slides/slide-trtituvb.jpg">
                </div>
                <div class="item">
                    <img src="img/slides/slide-jinhui-xinhong-won-ee.jpg">
                </div>
                <div class="item">
                    <img src="img/slides/slide-cityu-info-day.jpg">
                </div>
                <div class="item">
                    <img src="img/slider2.jpg">
                </div>
                <div class="item">
                    <img src="img/slider1.jpg">
                </div>
                <!--<div class="item">
                    <img src="img/slider3.jpg">
                </div>-->
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
		
		<div class="row">
			<div class="col-xs-12">
                <legend class="section-heading"> <a href="research/" style="color: black">Research Interests</a></legend>
                <h4> Theoretical and Computational Biophysics </h4> 
                <p>
                	My long-term research goal is to explore molecular mechanisms of cellular systems and materials as well 
					as to develop new computational tools in order to understand fundamental physical principles behind 
					biological and materials phenomena. 
				</p>
				<p>
					On-going research projects include
					<ol>
						<li>Membrane deformation proteins, e.g., BAR family proteins; </li>
						<li>Actin cytoskeleton, which participates in many essential cellular processes such as signal transduction, cell 
							division, cellular shape and volume changes, cell migration, and vesicular trafficking; </li>
						<li>Amino acid – water interactions;</li>
						<li>Functioning mechanism of photoreceptor protein in plants.</li>
					</ol>
                </p>
			</div>
        </div>
        <div class="row">
			<div class="col-sm-12">
				<legend class="section-heading">Teaching<a name="teaching"></a></legend>
	    		<p>
                	AP1203 - General Physics III
                    <a href="http://www.cityu.edu.hk/ug/201415/course/AP1203.htm" target="_blank">View Details</a>
                </p>
				<p>
		    			AP3114 - Computational Methods for Physicists and Materials Engineers
					<a href="http://www.cityu.edu.hk/ug/201415/course/AP3114.htm" target="_blank">View Details</a>
				</p>
				<p>
	    			AP3130 - Biomaterials
					<a href="http://www.cityu.edu.hk/ug/201415/course/AP3130.htm" target="_blank">View Details</a>
				</p>
				<p>
	    			AP3240 - Biophysics (NEW!)
					<a href="http://www.cityu.edu.hk/ug/201415/course/AP3240.htm" target="_blank">View Details</a>
				</p>
				<p>
	    			AP4172/6172/8172 - Simulation and Modelling in Multidisciplnary Sciences
					<a href="http://www.cityu.edu.hk/ug/201415/course/AP4172.htm" target="_blank">View Details</a>
				</p>
				<p>
	    			AP4173/6173/8173 - Biomedical Materials
					<a href="http://www.cityu.edu.hk/ug/201415/course/AP4173.htm" target="_blank">View Details</a>
				</p>
				<p>
	    			AP4175/6175/8175 - Advanced Technologies in Biomedical Devices
					<a href="http://www.cityu.edu.hk/ug/201415/course/AP4175.htm" target="_blank">View Details</a>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<legend class="section-heading">Collaborators<a name="collaborators"></a></legend>
				<li><a target="_blank" href="http://www.sbs.ntu.edu.sg/aboutus/Faculty/lylu/Pages/Home.aspx">Lanyuan Lu</a> (Nanyang Technological University, Singapore)</li>
	    		<li><a target="_blank" href="http://feilab.ibp.ac.cn/LBEMSB/Home.html">Fei Sun</a> (Institute of Biophysics, Chinese Academy of Sciences, China)</li>
				<li><a target="_blank" href="http://chem.uic.edu/chemistry/people/faculty/xiaojing-yang">Xiaojing Yang</a> (University of Illinois at Chicago, US)</li>
				<li><a target="_blank" href="http://pharmacy.osu.edu/faculty-staff/users/cheng1302">Xiaolin Cheng</a> (Ohio State University, US)</li>
				<li><a target="_blank" href="http://www.ap.cityu.edu.hk/personal-website/wang-feng/home.html">Feng Wang</a> (City University of Hong Kong, HK)</li>
				<!--<li><a target="_blank" href="https://vothgroup.uchicago.edu">Gregory Voth</a> (University of Chicago, US)</li>
				<li><a target="_blank" href="http://www.rsdavis.mycpanel.princeton.edu/haatajagroup">Mikko Haataja</a> (Princeton University, US)</li>
				<li><a target="_blank" href="http://www.physics.mcgill.ca/~provatas/.index.html">Nikolas Provatas</a> (McGill University, Canada)</li>-->
			</div>
		</div>
	</div>

	<?php require('./inc_footer.php') ?>
</body>
</HTML>
