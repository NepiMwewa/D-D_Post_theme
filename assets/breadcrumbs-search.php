<?php
?>
  <div class="bread-crumbs">
    <a href="<?php $actual_link = "http://$_SERVER[HTTP_HOST]"; echo $actual_link . "/home" ?>">Home</a>
    <p>/</p>

    <a title="Go to Archive" href="<?php $actual_link = "http://$_SERVER[HTTP_HOST]"; echo $actual_link . "/archive" ?>">Archive</a>
    <p>/</p>
    
    <a> <?php echo '"'.$seached_query.'"'; ?></a>
  </div>
<?php
?>
