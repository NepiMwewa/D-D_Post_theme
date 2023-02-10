<?php
  get_header();
?>

<div class="index-content page-content">
  <?php
    include("assets/breadcrumbs-cat.php");
    the_archive_title('<h1 class="page-title">', '</h1>');
    the_archive_description( '<div class="archive-description">', '</div>' );
    
  ?>
  <?php global $wp_query;
  if(have_posts()) :
    ?> <div class="post-container"> <?php
    while (have_posts())
      :the_post();?>
      <article class="post">
        <?php if(has_post_thumbnail() ):?>
        <section class="img-section">
          <a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>">
            <div class="thumbnail">
              <?php echo get_the_post_thumbnail();?>
            </div>
          </a>
          <h2><?php the_title();?></h2>
            
          
        </section>
        <?php endif;?>
        <section class="text-section">
          <?php if(!has_post_thumbnail() ){ ?>
            <h2><?php the_title();?></h2>
          <?php };?>
          <div class="tags-cats"><?php echo get_the_category_list(', ');?>
          <?php echo get_the_tag_list(', ', ', '); ?></div>
          <div class="post-time">
            <?php the_time('F jS, Y'); ?>
          </div>
          <?php the_excerpt();?>
        </section>
        <div class="read-more-button">
            <a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>">Read <?php the_title();?></a>
            </div>
      </article>
    <?php
    endwhile;
    ?> </div> <?php
    else:
      echo '<p>No content found</p>';

    endif;?>
</div>

<?php
  include("assets/pagination.php");
  wp_reset_postdata();
  get_footer();
?>
