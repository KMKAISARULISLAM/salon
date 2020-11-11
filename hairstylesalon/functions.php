<?php
add_theme_support('post-thumbnails');
add_theme_support('title-tag');

function mahid_custom_logo()
{
  $mahid = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array('site-title', 'site-description'),

  );
  add_theme_support('custom-logo', $mahid);
}
add_action('after_setup_theme', 'mahid_custom_logo');









register_post_type(
  'hairpost',
  array(
    'labels' => array(
      'name' => 'Hair Style Post',
      'add_new' => 'Add New Post'
    ),
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail'),

  )
);



register_post_type(
  'Featured',
  array(
    'labels' => array(
      'name' => 'Featured Post',
      'add_new' => 'Add New Post'
    ),
    'public' => true,
    'supports' => array('title', 'editor', 'thumbnail'),

  )
);





function readmore($limit)
{
  $post_content = explode(
    " ",
    get_the_content()
  );
  $less_content = array_slice(
    $post_content,
    0,
    $limit
  );
  echo implode(
    " ",
    $less_content
  );
}



the_post_navigation(array(
  'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next', 'twentyfifteen') . '</span> ' .
    '<span class="screen-reader-text">' . __('Next post:', 'twentyfifteen') . '</span> ' .
    '<span class="post-title">%title</span>',
  'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous', 'twentyfifteen') . '</span> ' .
    '<span class="screen-reader-text">' . __('Previous post:', 'twentyfifteen') . '</span> ' .
    '<span class="post-title">%title</span>',
));

