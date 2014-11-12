<?php
/**
 * @file
 * Template for a slnswtranscripts 1col layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['page-menu']: Content in the page-menu.
 *   - $content['header']: Content in the header.
 *   - $content['title-strip']: Content in the title-strip.
 *   - $content['main']: Content in the main column.
 *   - $content['contact-strip-col']: Content in the contact-strip-col.
 *   - $content['footer']: Content in the footer.
 */
?>
<div class="panel-slnswtranscripts-1col clearfix panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div id="page-canvas">
    <?php if ($content['page-menu']): ?>
      <?php print $content['page-menu']; ?> 
      <?php endif; ?>
    <?php if ($content['header']): ?>
      <header class="panel-slnswtranscripts-1col-header">
        <?php print $content['header']; ?>
      </header>
    <?php endif; ?>
    <div class="clearing"></div>
    <?php if ($content['title-strip']): ?>
      <section class="panel-slnswtranscripts-1col-title-strip">
        <?php print $content['title-strip']; ?>
      </section>
     <?php endif; ?>
      <?php if ($content['main']): ?>
        <section class="panel-slnswtranscripts-1col-main">
          <?php print $content['main']; ?>
        </section>
      <?php endif; ?>
      <div class="panel-slnswtranscripts-1col-contact-strip">
      <?php if ($content['contact-strip-col']): ?>
        <div class="panel-slnswtranscripts-1col-contact-strip-col">
         <?php print $content['contact-strip-col']; ?>
        </div>
      <?php endif; ?>
      <div class="clearing"></div>
      </div>
      <?php if ($content['footer']): ?>
        <footer class="panel-slnswtranscripts-1col-footer">
          <?php print $content['footer']; ?>
        </footer>
      <?php endif; ?>
  </div>
</div>
