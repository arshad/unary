<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<div id="main-wrapper">

  <div id="page-header">
    <div class="container">

      <?php if ($title): ?>
        <?php print $breadcrumb; ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>

      <?php if ($tabs): ?>
        <?php print render($primary_tabs); ?>
      <?php endif; ?>

    </div>
  </div><!-- /#page-header -->

  
  <div id="tabs-wrapper" class="clearfix">
    <div class="container">
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      
      <?php if ($tabs): ?>      
        <?php print render($secondary_tabs); ?>
      <?php endif; ?>
    </div>
  </div><!-- /#tabs-wrapper -->

  <div id="main" class="main">
    <div class="container">
      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
    </div>
    <div id="content" class="<?php print (!$is_panel) ? 'container' : ''; ?>">
      <?php print render($page['content']); ?>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->
