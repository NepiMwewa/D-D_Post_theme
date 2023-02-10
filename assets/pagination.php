<?php 
if(isset($arch_query) == null){
  $arch_query = $wp_query;
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
}
if($arch_query->max_num_pages > 1){?>
  <div class="pagination">
    <?php
    $prevSvg = '<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
      </svg>';
    $nextSvg = '<svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
      </svg>';
    
    if($paged == 1){
      echo '<span class="greyed-out prev">'.$prevSvg.'</span>';
    }
    echo paginate_links( array(
                'total'     => $arch_query->max_num_pages,
                'mid_size'  => 2,
                'prev_next' => true,
                'prev_text' => $prevSvg,
                'next_text' => $nextSvg,
    ));
    if($paged == $arch_query->max_num_pages){
      echo "<span class='greyed-out next'>".$nextSvg."</span>";
    }?>
  </div>
<?php }?>