<?php $p =$pages->get('template=home_section')  ?>
<section id="colorlib-hero" class="js-fullheight" data-section="home">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(<?php echo $p->background_img->url ?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner js-fullheight">
					   					<div class="desc">
						   					<h1> <?php echo $p->greeting ?></h1>
						   					<h2> <?php echo $p->short_info ?></h2>
												<p><a href="<?php echo $p->cv->url ?>" download="<?php echo $pages->get('template=initial')->cv ?>" class="btn btn-primary btn-learn">Download CV <i class="icon-download4"></i></a></p>
											</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  
				  	</ul>
			  	</div>
</section>
