<?php
  get_header();
?>
<div class="page-content single-post">
  <?php if(have_posts()) : while (have_posts()) : the_post();?>
    <article class="post-container">
        
      <section class="img-section">
        <?php if(has_post_thumbnail() ):?>
          <div class="single-thumbnail">
            <?php echo get_the_post_thumbnail();?>
          </div>
        <?php endif;?>
        <h1><?php the_title();?></h1>
      </section>


      
      <section class="text-section">
      
        <div class="single-content">
          <?php include("assets/breadcrumbs-single.php"); ?>
          
          <?php the_content();?>
        </div>
        


      </section>
    </article>
    <?php
    endwhile;

    else:
      echo '<p>No content found</p>';

    endif;?>
</div>

<?php
  get_footer();
?>
