
<?php /* Template Name: collection */ ?>
<?php get_header();?>
<div class="index-content page-content">
  <?php 
  
  $args = array( 
    'post_type'               => 'post',
    'category_name'           => '',
    'order'                   => 'ASC',
    'orderby'                 => 'title',
  );
  $query = new WP_Query( $args );
  if($query->have_posts()){
    include("assets/breadcrumbs.php");
    
    ?> <div class="post-container"> <?php
    while ($query->have_posts()){
      $query->the_post();?>
      <article class="post">

        <section class="img-section">
          <?php if(has_post_thumbnail() ):?>
            <div class="thumbnail">
              <?php echo get_the_post_thumbnail();?>
            </div>
          <?php endif;?>
        </section>

        <section class="text-section">
          <h2><?php the_title();?></h2>
          <?php the_excerpt();?>
        </section>
        <div class="read-more-button">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Learn More</a>
            </div>
      </article>
    <?php
    }
    ?> </div> <?php
  }
  else{
    echo '<p>No content found</p>';

  };?>
</div>

<?php get_footer();?>
