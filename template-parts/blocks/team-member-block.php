<?php



// Create id attribute allowing for custom "anchor" value.
$id = 'team-member-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'team-member-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}







?>

<section class="sec member">
       <div class="container-xl">
            <div class="justify-content-center row">   
                <?php if( have_rows('team_members') ): ?>
                    <?php while( have_rows('team_members') ): the_row(); 
                      $user_id = get_sub_field('members');
                    ?>
                 
                <?php if(!empty($user_id)) : 
                       $user_info   =  get_userdata($user_id);
                       $description =  get_user_meta($user_id)['description'][0];
                       $img_src     =  get_field("profile_image",'user_'.$user_id.'');
                       $img_src     =  !empty($img_src) ? $img_src : get_avatar_url($user_id,['size' => '400']);
                     ?>
                   
                     <div class="col-md-4">
                       <div class="align-items-center box d-flex flex-column justify-content-center <?= get_sub_field('color_code'); ?>">
                           <a href="users/?id=<?= $user_id ?>&color=<?= get_sub_field('color_code'); ?>">
                            <div class="img"><img src="<?= $img_src; ?>" alt="" class="w-100"></div>
                           </a>
                           <div class="accordion">
                               <div class="copy-acc">
                                   <p><?= $description; ?></p>
                               </div>
                               <div class="d-flex icon justify-content-center">
                                   <span class="plus"></span>
                                   <span class="minus"></span>
                               </div>
                           </div>
                           <div class="meta text-center">
                               <h2><?= $user_info->display_name; ?></h2>
                               <p><?=  get_field("user_info",'user_'.$user_id.'');?></p>
                               <a href="users/?id=<?= $user_id ?>&color=<?= get_sub_field('color_code'); ?>"><?= $user_info->user_email; ?></a>
                           </div>
                       </div>
                   </div>
                   
                <?php endif; ?>
                
            <?php endwhile; ?>
           <?php endif; ?>
        </div>
    </div>
</section>