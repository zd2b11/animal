<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <title><?php bloginfo("name"); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <?php wp_head(); ?>
  </head>

  <body>
    <header class="header-area">
      <div class="mainimg">
        <h1><?php bloginfo("name"); ?></h1>
      </div>
    </header>

    <div class="main-area">
      <div class="container">
        <div class="sub">
          <nav class="navi-area">
            <ul>
              <?php $navItems = wp_get_nav_menu_items('navi_1'); ?>
              <?php foreach ($navItems as $navItem): ?>

              <li>
              <?php if ($post->post_name === $navItem->post_excerpt): ?>
                <a href="<?php echo $navItem->url; ?>" class="current"><?php echo $navItem->title; ?></a>
              <?php else: ?>
                <a href="<?php echo $navItem->url; ?>"><?php echo $navItem->title; ?></a>
              <?php endif; ?>
              </li>

              <?php endforeach; ?>
            </ul>
          </nav>
          <div class="banner-area">
            <div class="banner-box">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/banner_250x250.png" alt=""></a>
            </div>
            <div class="banner-box">
              <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/banner_250x250.png" alt=""></a>
            </div>
          </div>
        </div>
