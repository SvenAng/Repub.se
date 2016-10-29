<?php
/**
 * @file
 * Template for Zurb Foundation Two column bricks Display Suite layout.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="zf-2col-bricks <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <div class="row blog-row">
    <div class="column medium-12">
      <?php //print $rubrik; ?>
    </div>
    <div class="column small-12 medium-3 large-2">
      <div class="submitted-date">
        <?php $custom_month = format_date($node->created, 'custom', 'M'); ?>
        <?php $custom_day = format_date($node->created, 'custom', 'd'); ?>
        <?php $custom_year = format_date($node->created, 'custom', 'Y'); ?>
        
        <div class="day"><?php print $custom_day; ?></div>
        <div class="month"><?php print $custom_month; ?></div>
        <div class="year"><?php print $custom_year; ?></div>
      </div>
      <?php if ($avatar!=NULL): ?>
        <div class="avatar_img"><?php print $avatar; ?></div>
        <?php endif; ?>
      
    </div>
    <div class="column small-12 medium-9 large-10">
      <?php print $rubrik; ?>
      <?php print $right; ?>
    </div>
  </div>  
  
  

  

 

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
