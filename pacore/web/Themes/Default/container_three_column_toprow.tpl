<?php echo $top_navigation_bar;?>
<div id="container" <?php echo $outer_class;?>>
  <?php echo $header;?>
<div id="bg_blog_post"></div>        
  <div id="content">  

    <div id="col_c">
    <?php 
    // note that in this layout the right gutter is float:right, so it needs to be 
    // FIRST in the HTML dom to be aligned with the top
    if ( isset($array_right_modules) and (count( $array_right_modules ) > 0) ) {
        foreach ( $array_right_modules as $right_module ) {
          echo $right_module;
        }
      }
    ?>    
    
    </div>

    <div id="toprow">
    
    <?php
      if ( !empty($array_toprow_modules)) {
        foreach ( $array_toprow_modules as $toprow_module )
        {
          echo $toprow_module;
        }
      echo '<br style="clear:both;" />';
      }
    ?>

    </div>

    <div id="col_a">
    
    <?php
      if ( isset($array_left_modules) and (count($array_left_modules) > 0) ) {
        foreach ( $array_left_modules as $left_module )
        {
          echo $left_module;
        }
      }
    ?>

    </div>

    <div id="col_b">
    
    <?php 
      if ( isset($array_middle_modules) and (count( $array_middle_modules ) > 0) ) {
        foreach ( $array_middle_modules as $middle_module ) {
          echo $middle_module;
        }
      }
    ?>
    
    </div>    

  </div>
  
  <?php 
      echo $footer;
  ?>
  </div>
  <div id="foreground_element"></div>
</body>
</html>