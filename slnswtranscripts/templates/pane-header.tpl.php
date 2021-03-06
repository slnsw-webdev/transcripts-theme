<?php
/**
 * @file
 * Returns the HTML for Panels Everywhere's navigation pane.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/2052507
 */
?>
<?php if ($logo): ?>
  <div class="header__logo-container" id="logo-container">
  		<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo">
  		<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
  </div>
<?php endif; ?>

<?php if ($site_name || $site_slogan): ?>
  <div class="header__name-and-slogan" id="name-and-slogan">
    <?php if ($site_name): ?>
      <h1 class="header__site-name" id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
      </h1>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <h2 class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></h2>
    <?php endif; ?>
  </div>
<?php endif; ?>
