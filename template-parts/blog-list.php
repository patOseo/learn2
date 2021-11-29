<div class="col-md-4">
    <div class="box d-flex flex-column h-100 justify-content-between">
        <div class="img">
        	 <?php if($blogimg): echo $blogimg; else: echo wp_get_attachment_image($defimg, 'program-view', '', array('class' => 'w-100 h-auto')); endif; ?>
        </div>
        <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
        	<div class="text">
            	<h2><a href="<?= get_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h2>
            	<h3 class="author"><i>by <?php the_author(); ?></i></h3>
            	<p><?= get_the_excerpt(); ?></p>
           </div>
           <button class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</button>
        </div>
    </div>
</div>