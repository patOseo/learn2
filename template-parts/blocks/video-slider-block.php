<?php if(have_rows('video_slider')): ?>

	<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<div class="container video-slider">
	<div class="owl-carousel owl-loaded owl-drag">
		<?php while(have_rows('video_slider')): the_row(); ?>
			<div class="video-slide">
				<div class="embed-container">
					<?php the_sub_field('video_link'); ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <script type="text/javascript">
    if ($('.owl-carousel').length > 0) {
        $(".owl-carousel").owlCarousel({
            dots: true,
            autoplay: false,
            margin: 50,
            items: 1,
            loop: true
        });
    }
   </script>

<?php endif; ?>

 




