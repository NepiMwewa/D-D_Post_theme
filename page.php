<?php
  get_header();
    # /path/to/public_html/include
  
?>

  <div class="page-content">
      <?php if(have_posts()) :
        while (have_posts()) :the_post();

        include("assets/breadcrumbs.php");
        include("assets/subNavMenu.php");
        

          ?><h1><?php the_title(); ?></h1><?php

          if(has_post_thumbnail() ):
          ?> <div class="page-img"><?php echo get_the_post_thumbnail();?></div><?php
          endif;

          ?> <div class="content-column"><?php the_content();?></div><?php

        endwhile;

        else:
          echo '<p>No content found</p>';

        endif;
      ?>
  </div>


<?php
  get_footer();
?>
