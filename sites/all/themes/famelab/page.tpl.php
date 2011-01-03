<?php
// $Id: page.tpl.php,v 1.1.2.1 2009/02/24 15:34:45 dvessel Exp $
include('global-header.tpl.php');
?>

   
    </div>
    
    <?php print $breadcrumb; ?>

    <div id="main" class="column <?php print ns('grid-16', $left, 4, $right, 3) . ' ' . ns('push-4', !$left, 4); ?>">
      
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php if ($tabs): ?>
        <div class="tabs"><?php print $tabs; ?></div>
      <?php endif; ?>

      <?php print $messages; ?>
      <?php print $help; ?>

      <div id="main-content" class="region clear-block">
        <?php print $content; ?>
      </div>
      
      <?php print $feed_icons; ?>
    </div>

  <?php if ($left): ?>
    <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $right, 3); ?>">
      <?php print $left; ?>
    </div>
  <?php endif; ?>

  <?php if ($right): ?>
    <div id="sidebar-right" class="column sidebar region grid-3">
      <?php print $right; ?>
    </div>
  <?php endif; ?>
<?php
include('global-footer.tpl.php');
?>