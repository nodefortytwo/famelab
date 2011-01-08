<?php
//Removes duplicate last item, adds '/' char for screen readers and turns the breadcrumb in to a list item (personal preference)
function phptemplate_breadcrumb($breadcrumb) {
	   if (!empty($breadcrumb)) {
                   foreach($breadcrumb as $part){
                       if ($last_item != strip_tags($part)){
                           $temp[] = $part;
                           $temp[] = '/';
                       }
                       $last_item = strip_tags($part);
                   }
                   array_pop($temp);
                   $temp[count($temp) -1] = strip_tags($temp[count($temp) -1]);
                   $breadcrumb = $temp;
		   return '<div id="breadcrumb" class="grid-16 alpha omega">' .  theme('item_list', $breadcrumb) . '</div>';
	   }
}

//Hopefully fixes the active menu issue with context
function famelab_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {

  $class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
  if (!empty($extra_class)) {
    $class .= ' '. $extra_class;
  }
  if ($in_active_trail) {
    $class .= ' active-trail';
  } else {
    // Get the link's URL (sadly, this function doesn't include the link object)
    $url_pattern = '/<a\s[^>]*href=\"([^\"]*)\"[^>]*>.*<\/a>/siU';
    preg_match($url_pattern, $link, $matches);
    $link_path = substr_replace($matches[1], '', 0, 1); // remove first slash

    $contexts = context_get();
    if(!empty($contexts)) {
        $active_paths = array();
        foreach ($contexts['context'] as $context) {
          if (array_key_exists('menu', $context->reactions)) {
            $active_paths[$context->reactions['menu']] = $context->reactions['menu'];
          }
        }
        
        if (in_array(drupal_lookup_path('source', $link_path), $active_paths)) {
          $class .= ' active-trail';
        }
    }
  }
  return '<li class="'. $class .'">'. $link . $menu ."</li>\n";
}