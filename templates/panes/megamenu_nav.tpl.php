<?php
/**
 * @file
 * Adaptivetheme panel pane template.
 *
 * This template has block type classes that react to styles applied to blocks,
 * saving the trouble of having to style multiple selectors to target blocks
 * and panel panes. This template also makes use the attributes arrays for the
 * wrapper and content wrapper.
 *
 * Adaptivetheme variables:
 * - $is_mobile: Bool, requires the Browscap module to return TRUE for mobile
 *   devices. Use to test for a mobile context.
 * - $tag: top level wrapper element, section or div.
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
?>
<div class="wetkit-menu pull-right">
  <div class="module-menu-section">
  <?php if ($pane_prefix): ?>
    <?php print $pane_prefix; ?>
  <?php endif; ?>
  <div<?php print $tag . $attributes . $id; ?>>
    <div class="block-inner clearfix">
      <?php if ($admin_links): ?>
        <?php print $admin_links; ?>
      <?php endif; ?>

      <?php print render($title_prefix); ?>

      <?php if ($title): ?>
        <?php if($display->title_pane == $pane->pid) : ?>
          <h1 id="wb-cont"><?php print $title; ?></h1>
        <?php else : ?>
          <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
        <?php endif; ?>
      <?php endif; ?>

      <?php print render($title_suffix); ?>

      <div<?php print $content_attributes; ?>>
        <?php print render($content); ?>
      </div>

    </div>
  </div>
  <?php if ($pane_suffix): ?>
    <?php print $pane_suffix; ?>
  <?php endif; ?>
  </div>
</div>
