<?php
?>
  <div class="bread-crumbs breadcrumbs-single">
    <a title="Go to Home" href="<?php $actual_link = "http://$_SERVER[HTTP_HOST]"; echo $actual_link . "/home" ?>">Home</a>
    <p>/</p>
    
    <a title="Go to Archive" href="../../archive">Archive</a>
    <p>/</p>

    <?php $the_cat = get_the_category(); $category_name = $the_cat[0]->cat_name; $category_link = get_category_link( $the_cat[0]->cat_ID ); ?>
    <a href="<?php echo $category_link;?>"><?php echo $category_name;?></a>
    <p>/</p>

    <a> <?php echo get_the_title(); ?></a>

    <div id="edit-post"><?php edit_post_link('Edit Post'); ?></div>

  </div>
<?php
?>