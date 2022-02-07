<?php

$manual = get_field('manual');
$featured_view = get_field('featured_programs_view');

$the_progs = null;
$the_cat = null;

if(get_field('program_category')) {
    $the_cat = get_field('program_category');
}

if(get_field('select_programs')) {
    $the_progs = get_field('select_programs', false, false);
}

$lang = get_field('language');

if($the_cat != null && $manual != 1) {
    $args = array(
        'post_type' => 'programs',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'menu_order',
        'lang' => $lang,
        'tax_query' => array(
            array(
                'taxonomy' => 'program',
                'terms'    => $the_cat,
                'include_children' => false
            )
        )
    );
} elseif($the_progs != null && $manual == 1) {
    $args = array(
        'post_type' => 'programs',
        'posts_per_page' => -1,
        'post__in' => $the_progs,
        'orderby' => 'post__in',
        
    );

} else {
    $args = array(
        'post_type' => 'programs',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'menu_order',
        'lang' => $lang
    );
}

$programs = new WP_Query($args);

?>

<?php if($programs->have_posts()): ?>
    <?php if($featured_view): ?>
        <section class="jumbo sec">
            <div class="promoted-link container-xl">
                <div class="row justify-content-center">
                    <?php while($programs->have_posts()): $programs->the_post(); ?>
                    <div class="col-md-6 px-0">
                        <div class="align-items-center box d-flex flex-column h-100 justify-content-between text-center" style="background: <?php if(get_the_ID() != 4037 && get_the_ID() != 3349) { ?>linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.85)), <?php } ?>url('<?php echo the_post_thumbnail_url('program-view'); ?>');background-size:cover;background-repeat:no-repeat;background-position:center center;">
                            <div class="copy flex-grow-1">
                                <h2 class="text-uppercase"><?php the_title(); ?></h2>
                                <p><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="align-items-center blue cta d-inline-flex mt-4 text-uppercase text-white" target="_blank" rel="noopener,noreferrer">Learn More</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
    <?php else: ?>
        <section class="sec callsec programsec">
            <div class="row">
                <?php while($programs->have_posts()): $programs->the_post(); ?>
                    <div class="col-md-4">
                        <div class="box d-flex flex-column h-100 justify-content-between">
                            <div class="img"><img src="<?php echo the_post_thumbnail_url('program-view'); ?>" alt="<?php the_title(); ?>" class="w-100"></div>
                            <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
                                <div class="text">
                                    <h2><a href="<?php if(get_the_ID() == 3349) { echo "https://www.save-the-titanic.com/"; } else { the_permalink(); } ?>" class="stretched-link"><?php the_title(); ?></a></h2>
                                    <p><?php echo wp_trim_words(the_excerpt(), 30); ?></p>
                                </div>
                                <button class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</button>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>