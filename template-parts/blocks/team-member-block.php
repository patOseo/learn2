<?php

// Create id attribute allowing for custom "anchor" value.
// $id = 'team-member-block' . $block['id'];
// if( !empty($block['anchor']) ) {
//     $id = $block['anchor'];
// }

// // Create class attribute allowing for custom "className" and "align" values.
// $className = 'team-member-block';
// if( !empty($block['className']) ) {
//     $className .= ' ' . $block['className'];
// }
// if( !empty($block['align']) ) {
//     $className .= ' align' . $block['align'];
// }

$staffargs = array(
  'post_type' => 'staff',
  'posts_per_page' => -1,
  'order' => 'ASC',
);

$staff = new WP_Query($staffargs);

?>


<?php if($staff->have_posts()): ?>
<section class="sec member">
       <div class="container-xl">
            <div class="justify-content-center row">   
              <?php while( $staff->have_posts() ): $staff->the_post(); 

                $staffid = get_the_ID();
                $bio = get_field('bio', $staffid);
                $img = get_field('profile_image', $staffid);
                $position = get_field('position', $staffid);
                $email = get_field('email', $staffid);
                $color = get_field('natural_approach', $staffid);

              ?>
                   
                     <div class="col-md-4">
                       <div class="align-items-center box d-flex flex-column justify-content-center <?= $color; ?>">
                           <a href="<?php the_permalink(); ?>">
                            <div class="img"><?php echo wp_get_attachment_image($img, 'medium', '', array('class' => 'w-100 h-auto')); ?></div>
                           </a>
                           <div class="accordion">
                               <div class="copy-acc">
                                   <p><?= $bio; ?></p>
                               </div>
                               <div class="d-flex icon justify-content-center">
                                   <span class="plus"></span>
                                   <span class="minus"></span>
                               </div>
                           </div>
                           <div class="meta text-center">
                               <h2><?php the_title(); ?></h2>
                               <p><?= $position; ?></p>
                               <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
                           </div>
                       </div>
                   </div>

              <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>