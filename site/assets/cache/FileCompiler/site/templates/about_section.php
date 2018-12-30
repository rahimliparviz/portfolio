<?php $p =$pages->get('template=about_section')  ?>
<section class="colorlib-about" data-section="about">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-12">
							<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-md-12">
									<div class="about-desc">
										<span class="heading-meta"><?php echo $p->title ?></span>
										<h2 class="colorlib-heading"><?php echo $p->page_title ?></h2>
                                        <?php echo $p->body ?>
									</div>
								</div>
							</div>
							<div class="row">

                            <?php foreach($p->services as $k=>$item) :?>
                                <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
									<div class="services color-<?php echo $k+1 ?>">
										<span class="icon2"><i class="fa fa-<?php echo $item->icon ?>"></i></span>
										<h3><?php echo $item->service_name ?></h3>
									</div>
								</div>
                            <?php endforeach;?>

							</div>
						
						</div>
					</div>
				</div>
			</section>