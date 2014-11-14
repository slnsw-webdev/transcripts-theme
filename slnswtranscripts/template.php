<?php

/******************************************
Theme Hooks
*******************************************/

// strip out panel separator divs
function slnswtranscripts_panels_default_style_render_region($vars) {
  $output = '';
  $output .= implode('', $vars['panes']);
  return $output;
}

// modify main menu, burger style menu
function slnswtranscripts_menu_tree__main_menu($variables) {
  if (strpos($variables['tree'], 'first') !== false) {
    return '<nav class="main-menu"><p class="account-links"><a href="/user/login">login</a></p><form action="/search/node" method="post" id="search"><input type="text" name="keys" placeholder="search the whole site."><input type="image" src="/sites/all/themes/slnswtranscripts/images/icon-magnify.png"></form><ul>' . $variables['tree'] . '</ul><div class="social"><a href="https://www.facebook.com/statelibrarynsw"><img src="/sites/all/themes/slnswtranscripts/images/icon-facebook.png" width="26" alt="facebook"></a><a href="https://twitter.com/statelibrarynsw"><img src="/sites/all/themes/slnswtranscripts/images/icon-twitter.png" width="26" alt="twitter"></a><a href="http://vimeo.com/statelibrarynsw"><img src="/sites/all/themes/slnswtranscripts/images/icon-vimeo.png" width="26" alt="vimeo"></a><a href="http://www.sl.nsw.gov.au/about/collections/flickr.html"><img src="/sites/all/themes/slnswtranscripts/images/icon-flickr.png" width="26" alt="flickr"></a><a href="http://www.pinterest.com/statelibrarynsw/"><img src="/sites/all/themes/slnswtranscripts/images/icon-pinterest.png" width="26" alt="pinterest"></a><a href="http://www.historypin.com/channels/view/id/11686538/"><img src="/sites/all/themes/slnswtranscripts/images/icon-history-pin.png" width="26" alt="history pin"></a></div></nav>';
  } else {
    return '<ul>' . $variables['tree'] . '</ul>';
  }
}

// modify main menu, show arrow on links with children
function slnswtranscripts_menu_link__main_menu(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  
  if ($element['#below']) {
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . '<img class="sub-toggle" src="/sites/all/themes/slnswtranscripts/images/icon-menu-down.png" alt="">' . $sub_menu . "</li>\n";
  } else {
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . "</li>\n";
  }
}

// modify user menu, add username 
function slnswtranscripts_menu_link__user_menu(array $variables) {
  $element = $variables['element'];
  
  $sub_menu = '';

  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  
  if ($element['#original_link']['link_path'] == 'user') {
    global $user;
    $element['#title'] = user_is_logged_in() ? t($user->name) : t('User account');
  }
  
  if ($element['#original_link']['link_path'] == 'user/register') {
    global $user;
    if (user_is_logged_in()) {
      return '';
    }
  }
  
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

// clean up body field output
function slnswtranscripts_field__body($variables) {
  $output = '';

  // Render the items.
  foreach ($variables['items'] as $delta => $item) {
    $output .= drupal_render($item);
  }

  // Render the top-level div.
  $output = '<div class="' . $variables['classes'] . '"' . $variables['attributes'] . '>' . $output . '</div>';

  return $output;
}

// alt text for images
function slnswtranscripts_image($variables) {
  $attributes = $variables['attributes'];
  $attributes['src'] = file_create_url($variables['path']);

  foreach (array('width', 'height', 'alt', 'title') as $key) {
    if (isset($variables[$key])) {
      $attributes[$key] = $variables[$key];
    }
  }
  
  if (!isset($attributes['alt'])) {
    $attributes['alt'] = '';
  }

  return '<img' . drupal_attributes($attributes) . ' />';
}