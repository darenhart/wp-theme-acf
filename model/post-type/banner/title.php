<?php

function dm_add_title_banner($data, $postarr) 
{
  $post_type = 'banner';
  $atrr = $post_type.'-titulo';

  if ($data['post_type'] == $post_type && $data['post_status'] == 'publish') {
    if ( $postarr['acf'][$atrr] ) {
      $title = $postarr['acf'][$atrr];
      $data['post_title'] = $title;
    }
  }

  return $data;
}

add_filter('wp_insert_post_data', 'dm_add_title_banner', 10, 2 );
