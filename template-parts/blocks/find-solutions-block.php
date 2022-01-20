<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'about-intro-block' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'about-intro-block';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$heading = get_field('heading');
$description = get_field('description');
?>
<section class="sec">
    <h2 class="text-center text-uppercase"><?= $heading; ?></h2>
    <div class="container"> <?= $description; ?>
        <div class="cta-list justify-content-center row">

            <?php
            if (have_rows('categories')) :
                while (have_rows('categories')) : the_row();
                    $select_category = get_sub_field('select_category');
            ?>
                    <div class="col-md-6 col-xl-4"><a href="#<?= $select_category->slug; ?>" class="align-items-center cta d-flex justify-content-center lightblue text-center text-nowrap text-uppercase text-white"><?= $select_category->name; ?></a></div>

            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php
    if (have_rows('categories')) :
        while (have_rows('categories')) : the_row();
            $select_category = get_sub_field('select_category');
?>
<section class="sec callsec" id="<?php echo $select_category->slug; ?>">
        <div class="container">
            <hr>
            <h2 class="text-center text-uppercase"><?php echo $select_category->name; ?></h2>
            <p><?php echo $select_category->description; ?></p>
            <div class="row">
            <?php
            $args = [
                'post_type' => 'programs',
                'posts_per_page' => 3,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'program',
                        'terms'    => $select_category->term_id,
                        'include_children' => false
                    ),
                ),
                'order' => 'ASC',
                'orderby' => 'menu_order'
            ];
            $posts = get_posts($args);
            foreach( $posts as $p ):
            ?>
                <div class="col-md-4">
                    <div class="box d-flex flex-column h-100 justify-content-between">
                        <div class="img"><img src="<?php echo get_the_post_thumbnail_url($p->ID, 'program-view'); ?>" alt="" class="w-100"></div>
                        <div class="copy d-flex flex-column flex-grow-1 justify-content-between">
                            <div class="text">
                                <h2><a href="<?php if($p->ID == 3349) { echo "https://www.save-the-titanic.com/"; } else { echo get_the_permalink($p->ID); } ?>" class="stretched-link"><?php echo $p->post_title; ?></a></h2>
                                <p><?php echo wp_trim_words($p->post_excerpt, 30); ?></p>
                            </div>
                            <button class="align-items-center cta d-flex justify-content-center lightblue text-uppercase text-white mt-4">read more</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <div class="col-12 text-center">
                    <a href="<?php the_field('main_category_page', $select_category); ?>" class="align-items-center cta d-inline-flex justify-content-center lightblue text-uppercase text-white mt-4">View More Programs in <?php echo $select_category->name; ?></a>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>