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
  <div id="main" class="main container-fluid">
    <div id="content">
      <a id="main-content"></a>
      <div id="page-header">
          <div class="container">
            <?php if ($messages): ?>
              <div id="messages">
                <div class="container">
                  <?php print $messages; ?>
                </div>
              </div>
            <?php endif; ?>
            <?php if ($title): ?>
              <div class="page-header">
                <h1 class="title"><?php print $title; ?></h1>
              </div>
            <?php endif; ?>
            <?php if ($tabs): ?>
              <div class="tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
              <ul class="action-links">
                <?php print render($action_links); ?>
              </ul>
            <?php endif; ?>
          </div>
      </div>
      <?php print render($page['content']); ?>
    </div>
  </div>
</div>

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="inner">
          <?php print render($footer_menu); ?>
        </div>
      </div>
    </div>
  </div>
</footer>