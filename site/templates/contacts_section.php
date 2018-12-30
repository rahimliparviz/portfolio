<?php $p =$pages->get('template=contacts_section')  ?>

<section class="colorlib-contact" data-section="contact">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?php echo $p->title ?></span>
							<h2 class="colorlib-heading"><?php echo $p->page_title ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
                              <?php foreach($p->contacts as $k=>$item):?>
                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="fa fa-<?php echo $item->icon ?>"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="#"><?php echo $item->item_name ?></a></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
						</div>
                        <div class="col-md-6">
                              <?php foreach($p->socials as $k=>$item):?>
                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="fa fa-<?php echo $item->icon ?>"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="#"><?php echo $item->item_name ?></a></p>
                                    </div>
                                </div>
                            <?php endforeach;?>
						</div>
								
					</div>
				</div>
			</section>