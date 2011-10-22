<?php
// remove a tag from the head for Drupal 7
function lessie_html_head_alter(&$head_elements) {
  unset($head_elements['system_meta_generator']);
}

// Purge needless XHTML stuff.
//
function lessie_process_html_tag(&$vars) {
  $el = &$vars['element'];

  // Remove type="..." and CDATA prefix/suffix.
  unset($el['#attributes']['type'], $el['#value_prefix'], $el['#value_suffix']);

  // Remove media="all" but leave others unaffected.
  if (isset($el['#attributes']['media']) && $el['#attributes']['media'] === 'all') {
    unset($el['#attributes']['media']);
  }
}

// Minify HTML output.
function lessie_process_html(&$vars) {
  $before = array(
    "/>\s\s+/",
    "/\s\s+</",
    "/>\t+</",
    "/\s\s+(?=\w)/",
    "/(?<=\w)\s\s+/"
  );

  $after = array('> ', ' <', '> <', ' ', ' ');

  // Page top.
  $page_top = $vars['page_top'];
  $page_top = preg_replace($before, $after, $page_top);
  $vars['page_top'] = $page_top;

  // Page content.
  if (!preg_match('/<pre|<textarea/', $vars['page'])) {
    $page = $vars['page'];
    $page = preg_replace($before, $after, $page);
    $vars['page'] = $page;
  }

  // Page bottom.
  $page_bottom = $vars['page_bottom'];
  $page_bottom = preg_replace($before, $after, $page_bottom);
  $vars['page_bottom'] = $page_bottom . drupal_get_js('footer');
}
