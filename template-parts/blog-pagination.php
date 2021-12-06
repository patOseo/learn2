<div class="col-12 d-flex justify-content-between">
     <?php if($paged <= $total && $paged > 1  ) : ?>
         <a href="/blog/page/<?= max( 1, get_query_var('paged') - 1 ); ?>/" class="cta d-inline-flex justify-content-center lightblue mt-4 text-uppercase text-white">&lt;&lt; Latest Entries</a>
     <?php endif;  ?>
     
     

       <?php if($paged < $total ) : ?>
         <a href="/blog/page/<?= max( 1, get_query_var('paged') ) + 1; ?>/" class="cta d-inline-flex justify-content-center lightblue mt-4 text-uppercase text-white">Older Entries &gt;&gt;</a>
     <?php endif;  ?>
</div>