<?php
?>
  <div class="bread-crumbs">
    <a href="<?php $actual_link = "http://$_SERVER[HTTP_HOST]"; echo $actual_link . "/home" ?>">Home</a>
    <p>/</p>

    <a title="Go to Archive" href="..">Archive</a>
    <p>/</p>
    
    <a> <?php echo single_term_title(); ?></a>
  </div>
<?php
?>
