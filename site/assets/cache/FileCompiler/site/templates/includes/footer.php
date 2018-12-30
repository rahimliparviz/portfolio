<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<!-- jQuery -->
	<script src="<?php echo $root?>app/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo $root?>app/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo $root?>app/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo $root?>app/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo $root?>app/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo $root?>app/js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="<?php echo $root?>app/js/jquery.countTo.js"></script>
	<!-- Isotope -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

	
	
	<!-- MAIN JS -->
	<script src="<?php echo $root?>app/js/main.js"></script>


	<script>
	
	$(document).ready(function(){
  $('.portfolio-item').isotope(function(){
      itemSelector:'.item'
    });



  $('.portfolio-menu ul li').click(function(){
    $('.portfolio-menu ul li').removeClass('active');
    $(this).addClass('active');


    var selector = $(this).attr('data-filter');
      $('.portfolio-item').isotope({
        filter: selector
      })
      return false;
  });
});
	
	</script>

	</body>
</html>