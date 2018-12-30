<?php $p =$pages->get('template=skills_section')  ?>

<section class="colorlib-skills" data-section="skills">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta"><?php echo $p->title ?></span>
							<h2 class="colorlib-heading animate-box"><?php echo $p->page_title ?></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft"> <?php echo $p->body ?>	</div>
                                <?php foreach($p->skills as $k=>$item):?>
                                <?php $color = ($k+1 > 6 ? $k%6 : $k+1);
                                $fadeIn = ($k%2 == 0 ? 'fadeInLeft' : 'fadeInRight');
                                 ?>
                                    <div class="col-md-6 animate-box" data-animate-effect="<?php echo $fadeIn ?>">
                                        <div class="progress-wrap">
                                            <h3><?php echo $item->skill_name ?></h3>
                                            <div class="progress">
                                                  <div class="progress-bar color-<?php echo $color ?>" role="progressbar" aria-valuenow="<?php echo $item->skill_level ?>"
                                                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $item->skill_level ?>%">
                                                <span><?php echo $item->skill_level ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
        </div>
    </div>
</section>