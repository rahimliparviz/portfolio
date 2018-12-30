<?php $p =$pages->get('template=works_section')  ?>

<section class="colorlib-work" data-section="work">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?php echo $p->title ?></span>
							<h2 class="colorlib-heading animate-box"><?php echo $p->page_title ?></h2>
						</div>
					</div>
					<div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
						<div class="col-md-12">                           
                             <div class="portfolio-menu">
                                <ul>
                                    <li class="active" data-filter="*">All</li>
                                    <?php foreach($p->categories as $k=>$item):?>
                                    <li data-filter=".<?php echo strtolower($item->category) ?>"><?php echo strtoupper($item->category)?></li>
                                    <?php endforeach;?>
                                   
                                </ul>
                            </div>

						</div>
					</div>
					<div class="row portfolio-item">

                    <?php foreach($p->works as $k=>$item):?>
						<div class="item <?php echo strtolower($item->category)?>" data-animate-effect="fadeInLeft">
							<div class="project" style="background-image: url(<?php echo $item->background_img->url?>">
								<div class="desc">
									<div class="con">
										<h3><a href="<?php echo $item->link ?>"><?php echo $item->item_name ?></a></h3>
										<span><?php echo strtoupper($item->category) ?></span>
										<p class="icon">
											<span data-toggle="tooltip" title="Project source code"><a href="<?php echo $item->code_link ?>"><i class="icon-share3"></i></a></span>
											<span data-toggle="tooltip" data-placement="top" title="Project link" ><a href="<?php echo $item->link ?>"><i class="icon-eye"></i> </a></span>
										</p>
									</div>
                                </div>
                                
                            </div>
                            <h2 style="color:#2c98f0"><?php echo $item->item_name ?></h2>
                            
						</div>
                        <?php endforeach;?>
					</div>
				
				</div>
			</section>