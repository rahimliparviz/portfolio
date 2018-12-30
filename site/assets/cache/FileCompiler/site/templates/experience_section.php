<?php $p =$pages->get('template=experience_section')  ?>
<section class="colorlib-experience" data-section="experience">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?php echo $p->title ?></span>
							<h2 class="colorlib-heading animate-box"><?php echo $p->page_title ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
				         <div class="timeline-centered">
                         <?php foreach($p->items as $k=>$item):?>
                                <?php $color = ($k+1 > 6 ? $k%6 : $k+1); ?>  
					         <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
					            <div class="timeline-entry-inner">

					               <div class="timeline-icon color-<?php echo $color ?>">
					                  <i class="icon-pen2"></i>
					               </div>

					               <div class="timeline-label">
					                  <h2><a href="#"><?php echo $item->item_name ?></h2>
                                      <?php echo $item->item_info ?>
					               </div>
					            </div>
					         </article>
                             <?php endforeach;?>

					    
					         <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
					            <div class="timeline-entry-inner">
					               <div class="timeline-icon color-none">
					               </div>
					            </div>
					         </article>
					      </div>
					   </div>
				   </div>
				</div>
			</section>