
<?php /* Template Name: archive-page */ ?>
<?php get_header();?>
<div class="index-content page-content">
  <?php 
  
  
  $args = array( 
    'post_type'               => 'post',
    'category_name'           => '',
    'order'                   => 'DESC',
    'orderby'                 => 'date',
  );
  $query = new WP_Query( $args );
  if($query->have_posts()){
    include("assets/breadcrumbs.php");
    ?><h1><?php the_title(); ?></h1><?php
    the_content();
    ?> <div class="post-container"> <?php
    while ($query->have_posts()){
      $query->the_post();?>
      <article class="post">
        <?php if(has_post_thumbnail() ):?>
        <section class="img-section">
          
            <div class="thumbnail">
              <?php echo get_the_post_thumbnail();?>
            </div>
            <h2><?php the_title();?></h2>
          
        </section>
        <?php endif;?>
        <section class="text-section">
          <?php if(!has_post_thumbnail() ){ ?>
            <h2><?php the_title();?></h2>
          <?php };?>
          <p><?php echo get_the_category_list(', ');?>
<?php echo get_the_tag_list(', ', ', '); ?></p>
          <?php the_excerpt();?>
        </section>
        <div class="read-more-button">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read <?php the_title();?></a>
            </div>
      </article>
    <?php
    }
    ?> </div> <?php
    wp_reset_postdata();
  }
  else{
    echo '<p>No content found</p>';

  };?>
</div>

<?php get_footer();?>
