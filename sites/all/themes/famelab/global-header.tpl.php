<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>


<body class="<?php print $body_classes; ?> show-grid">
  <div id="page" class="container-16 clear-block">

      <div id="site-header" class="clear-block grid-16">
            <?php if ($linked_site_name): ?>
                <h1 id="site-name" class="grid-7 alpha"><a href="/">FameLab</a></h1>
            <?php endif; ?>
            
            <div id="supporting-logo" class="grid-4 push-5">Cheltenham Festivals</div>
            
            <?php if ($main_menu_links || $secondary_menu_links): ?>
              <div id="site-menu" class="grid-16 alpha">
                <?php print $main_menu_links; ?>
                <?php print $secondary_menu_links; ?>
                <?php if ($search_box): ?>
                <div id="search-box"><?php print $search_box; ?></div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
        </div>
      <?php if (!empty($messages)): ?>
      <div id="messages" class="clear-block grid-16">
          <?php print $messages; ?>
      </div>
      <?php endif; ?>