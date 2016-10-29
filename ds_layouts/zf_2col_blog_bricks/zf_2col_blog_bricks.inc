<?php
/**
 * @file
 * Definition of Zurb Foundation Two column bricks Display Suite layout.
 */

function ds_zf_2col_blog_bricks() {
  return array(
    'label' => t('Republik blogg full'),
    'regions' => array(
      'left' => t('Left'),
      'rubrik' => t('Rubrik'),
      'avatar' => t('Avatar'),
      'right' => t('Right'),
      
    ),
    'image' => TRUE,
  );
}
