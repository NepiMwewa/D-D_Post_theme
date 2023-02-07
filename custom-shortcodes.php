<?php
function subscribe_link_att($atts) {
    $default = array(
        'link' => '#',
    );
    $a = shortcode_atts($default, $atts);
    return 'Follow us on '.$a['link'];
}
add_shortcode('subscribe', 'subscribe_link_att');
/*
$the_cat = get_the_category();
  $category_name = $the_cat[0]->cat_name;
  $category_link = get_category_link( $the_cat[0]->cat_ID );
  
  $post_title = get_the_title();
  $edit_post_link = edit_post_link('Edit Post'); 
  $html = '
  <div class="bread-crumbs breadcrumbs-single">
    <a title="Go to Home" href="../../../home">Home</a> <p>/</p>
    <a title="Go to Archive" href="../../archive">Archive</a> <p>/</p>
    <a href="'.$category_link.'">'.$category_name.'</a> <p>/</p>

    <a>'.$post_title.'</a>

    <div id="edit-post">'.$edit_post_link.'</div>

  </div>'
  return $html;
*/
function breadcrumbs_single() {
  $the_cat = get_the_category();
  $category_name = $the_cat[0]->cat_name;
  $category_link = get_category_link( $the_cat[0]->cat_ID );
  
  $post_title = get_the_title();
  $edit_post_link = get_edit_post_link(); 
  $html = '<div class="bread-crumbs breadcrumbs-single">
    <a title="Go to Home" href="../../../home">Home</a> <p>/</p>
    <a title="Go to Archive" href="../../archive">Archive</a> <p>/</p>
    <a href="'.$category_link.'">'.$category_name.'</a> <p>/</p>

    <a>'.$post_title.'</a>

    <div id="edit-post"><a class="post-edit-link" href="'.$edit_post_link.'">Edit Post</a></div>

  </div>';
  return $html;
}
add_shortcode('breadcrumbs-post', 'breadcrumbs_single');
?>