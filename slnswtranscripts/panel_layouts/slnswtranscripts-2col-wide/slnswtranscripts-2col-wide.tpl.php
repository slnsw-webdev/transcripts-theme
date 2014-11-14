<?php
/**
 * @file
 * Template for a slnswtranscripts 2col-wide layout.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top-row']: Content in the top row.
 *   - $content['left-col']: Content in the left column.
 *   - $content['right-col']: Content in the right column.
 */
?>
<div class="panel-slnswtranscripts-2col-wide clearfix panel-display" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <?php if ($content['top-row']): ?>
    <section class="panel-slnswtranscripts-2col-wide-top-row">
      <?php print $content['top-row']; ?>
    </section>
  <?php endif; ?>
  <?php if ($content['left-col']): ?>
    <section class="panel-slnswtranscripts-2col-wide-left-col">
      <?php print $content['left-col']; ?>
    </section>
  <?php endif; ?>
   <?php if ($content['right-col']): ?>
    <section class="panel-slnswtranscripts-2col-wide-right-col">
      <?php print $content['right-col']; ?>
    </section>
  <?php endif; ?>
</div>
