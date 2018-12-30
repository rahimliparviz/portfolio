<!-- header included -->
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/includes/header.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>
	
	<div id="colorlib-page">
		<div class="container-wrap">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<div class="text-center">
				<div class="author-img" style="background-image: url(<?php echo $page->background_img->url?>);"></div>
				<h1 id="colorlib-logo"><a href="index.html"><?php echo $page->title ?></a></h1>
				<span class="position"><?php echo $page->summary ?></span>
			</div>
			<nav id="colorlib-main-menu" role="navigation" class="navbar">
				<div id="navbar" class="collapse">
					<ul>
					<?php foreach($page->children as $k=>$item):?>
					<li <?php if($k == 0){ echo "class='active'";} ?>><a href="#" data-nav-section="<?php echo $item->title?>"><?php echo $item->title?></a></li>
					<?php endforeach;?>


						<!-- <li class="active"><a href="#" data-nav-section="home">Home</a></li>
						<li><a href="#" data-nav-section="about">About</a></li>
						<li><a href="#" data-nav-section="skills">Skills</a></li>
						<li><a href="#" data-nav-section="education">Education</a></li>
						<li><a href="#" data-nav-section="experience">Experience</a></li>
						<li><a href="#" data-nav-section="work">Work</a></li>
						<li><a href="#" data-nav-section="contact">Contact</a></li> -->
					</ul>
				</div>
			</nav>

			<div class="colorlib-footer">
				
				<ul>
				<?php foreach($pages->get('template=contacts_section')->socials as $k=>$item):?>
					<li><a href="<?php echo $item->link?>"><i class="fa fa-<?php echo $item->icon?>"></i></a></li>
				<?php endforeach;?>

				</ul>
			</div>

		</aside>

		<div id="colorlib-main">
		<!-- languages -->
		<div class="lang">
		<?php foreach($languages as $k => $language) : ?>
			<a href="<?=$page->localUrl($language)?>"><?=$language->title?>  <?php if($k == 0){echo '<span>|</span>' ;} ?> </a>
		<?php endforeach;?>
	</div>


			<!-- home -->
			<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/home_section.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>

			<!-- about -->
			<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/about_section.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>

			

			<!-- skills -->
			<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/skills_section.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>

			<!-- education -->
			<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/education_section.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>

			<!-- works -->
			<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/works_section.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>

			<!-- experience -->
			<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/experience_section.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>

			<!-- contacts -->
			<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/contacts_section.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)))?>

		</div>
	</div><!-- end:container-wrap -->
	</div><!-- end:colorlib-page -->
	

 <!-- footer included -->
<?php include('./includes/footer.php') ?>