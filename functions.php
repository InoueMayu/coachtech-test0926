<?php
add_action('init', function(){
  add_theme_support('post-thumbnails');
});

/* アイキャッチ画像がなければ、標準画像を取得する(blog)*/
function get_eyecatch_with_default() {
  if(has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/topics-img.jpg');
  
  endif;

  return $img;
}

function get_eyecatch_with_default2() {
  if(has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/styles-img1.jpg');
  
  endif;

  return $img;
}

add_action('init', function(){
  register_post_type('styles', [
    'label' => 'スタイル',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail', 'editor', 'title'],
    'has_archive' => true
  ]);
  // register_taxonomy_for_object_type('category', 'news');
  // register_taxonomy_for_object_type('post_tag', 'news');
});

function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'topics'; // ページURL
      $args['label'] = 'topics'; 
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );