<!DOCTYPE HTML>
<HTML>
<head>
<?php require('../inc_head.php'); ?>


<!-- following codes are from http://photoswipe.com/documentation/getting-started.html -->
<!-- Core CSS file -->
<link rel="stylesheet" href="../lib/PhotoSwipe/photoswipe.css"> 

<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite, 
     - preloader.gif (for browsers that do not support CSS animations) -->
<link rel="stylesheet" href="../lib/PhotoSwipe/default-skin/default-skin.css"> 
<!-- above codes are from http://photoswipe.com/documentation/getting-started.html -->


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
						<h1>Events</h1>
						
						<table class="table">
							<thead>
								<tr>
									<th>Date</th>
									<th>Event</th>
									<th>Gallery</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>24/01/2017</td>
									<td><a href="3rd-symposium-biophysics/">
										3rd Symposium on Biophysics Postgraduate Research in Hong Kong
									</a></td>
									<td></td>
								</tr>
								<tr>
									<td>24/10/2016</td>
									<td><a href="images/24-oct-for-emailing.jpg">
										2016 Parallel Computing and MPI Programming Workshop by Dr. Kwai Wong
									</a></td>
									<td><a class="btn btn-xs btn-primary" style="cursor: pointer;" id="gallery-20161024">show photo gallery</a></td>
								</tr>
								<tr>
									<td>25-26/01/2016</td>
									<td><a href="pku-cityu-2016-workshop.php">
										Joint Workshop on Disorder and Disordered Materials
									</a></td>
									<td></td>
								</tr>
								<tr>
									<td>01/12/2015</td>
									<td>
										2015 MPI Supercomputing Workshop by Dr. Kwai Wong
									</td>
									<td><a class="btn btn-xs btn-primary" style="cursor: pointer;" id="gallery-20151201">show photo gallery</a></td>
								</tr>
							</tbody>
						</table>
					</div>
					
				</div>
			</div>
		</div>
	</div>





	<!-- following codes are from http://photoswipe.com/documentation/getting-started.html -->
	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	    <!-- Background of PhotoSwipe. 
	         It's a separate element, as animating opacity is faster than rgba(). -->
	    <div class="pswp__bg"></div>

	    <!-- Slides wrapper with overflow:hidden. -->
	    <div class="pswp__scroll-wrap">

	        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
	        <div class="pswp__container">
	            <!-- don't modify these 3 pswp__item elements, data is added later on -->
	            <div class="pswp__item"></div>
	            <div class="pswp__item"></div>
	            <div class="pswp__item"></div>
	        </div>

	        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
	        <div class="pswp__ui pswp__ui--hidden">

	            <div class="pswp__top-bar">

	                <!--  Controls are self-explanatory. Order can be changed. -->

	                <div class="pswp__counter"></div>

	                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

	                <button class="pswp__button pswp__button--share" title="Share"></button>

	                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

	                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

	                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
	                <!-- element will get class pswp__preloader--active when preloader is running -->
	                <div class="pswp__preloader">
	                    <div class="pswp__preloader__icn">
	                      <div class="pswp__preloader__cut">
	                        <div class="pswp__preloader__donut"></div>
	                      </div>
	                    </div>
	                </div>
	            </div>

	            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
	                <div class="pswp__share-tooltip"></div> 
	            </div>

	            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
	            </button>

	            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
	            </button>

	            <div class="pswp__caption">
	                <div class="pswp__caption__center"></div>
	            </div>

	        </div>

	    </div>
	</div>

	<!-- Core JS file -->
	<script src="../lib/PhotoSwipe/photoswipe.min.js"></script> 

	<!-- UI JS file -->
	<script src="../lib/PhotoSwipe/photoswipe-ui-default.min.js"></script> 
	<!-- above codes are from http://photoswipe.com/documentation/getting-started.html -->

	<script type="text/javascript">
		var items_20161024 = [
	        { src: 'images/20161024/IMG_1945.jpeg', w: 4032, h: 3024 },
	        { src: 'images/20161024/IMG_1946.jpeg', w: 4032, h: 3024 },
	        { src: 'images/20161024/IMG_1947.jpeg', w: 4032, h: 3024 },
	        { src: 'images/20161024/IMG_1948.jpeg', w: 4032, h: 3024 },
	        { src: 'images/20161024/IMG_1949.jpeg', w: 4032, h: 3024 }
	    ];

	    var items_20151201 = [
	        { src: 'images/20161201/IMG_6996.JPG', w: 6614, h: 2482 },
	        { src: 'images/20161201/slide-hpc-workshop-1.jpg', w: 655, h: 491 },
	        { src: 'images/20161201/slide-hpc-workshop-2.jpg', w: 655, h: 491 },
	        { src: 'images/20161201/slide-hpc-workshop-3.jpg', w: 655, h: 491 },
	    ];

		var openPhotoSwipe = function(items) {
		    var pswpElement = document.querySelectorAll('.pswp')[0];
		    
		    // define options (if needed)
		    var options = {       
		        history: true,
		        focus: false,

		        showAnimationDuration: 0,
		        hideAnimationDuration: 0
		    };
		    
		    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
		    gallery.init();
		};

		document.getElementById('gallery-20161024').onclick = function() { openPhotoSwipe(items_20161024) };
		document.getElementById('gallery-20151201').onclick = function() { openPhotoSwipe(items_20151201) };

	</script>




	<?php require('../inc_footer.php') ?>
</body>
</HTML>
