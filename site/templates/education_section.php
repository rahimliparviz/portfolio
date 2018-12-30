<?php $p =$pages->get('template=education_section')  ?>

<section class="colorlib-education" data-section="education">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?php echo $p->title ?></span>
							<h2 class="colorlib-heading animate-box"><?php echo $p->page_title ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
                                        <?php foreach($p->items as $k=>$item):?>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="heading<?php echo $k+1?>">
									        <h4 class="panel-title">
									            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $k+1?>" aria-expanded="false" aria-controls="collapse<?php echo $k+1?>">
												<?php echo $item->item_name ?>									            </a>
									            </a>
									        </h4>
									    </div>
									    <div id="collapse<?php echo $k+1?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $k+1?>">
									        <div class="panel-body">
											<?php echo $item->item_info ?>
									        </div>
									    </div>
									</div>

                                        <?php endforeach;?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>