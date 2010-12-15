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

<div id="header-group-wrapper" class="full-width">
    <div id="header-group" class="container-16">
        <div id="header-group-inner" class="grid-16">
            <?php if ($linked_site_name): ?>
            <h1 id="site-name" class="grid-7 alpha"><?php print $linked_site_name; ?></h1>
            <?php endif; ?>
            <div id="supporting-logo">Festivals</div>
        </div>
    </div>
</div>

<div id="nav-group-wrapper" class="full-width">
    <div id="nav-group" class="container-16">
        <div id="nav-group-inner" class="grid-16">
            <?php if ($main_menu_links || $secondary_menu_links): ?>
            <div id="site-menu" class="grid-16 alpha">
            <?php print $main_menu_links; ?>
            <?php print $secondary_menu_links; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<div id="page-group-wrapper" class="full-width">
    <div id="page-group" class="container-16">
        <div id="page-group-inner" class="grid-16">



