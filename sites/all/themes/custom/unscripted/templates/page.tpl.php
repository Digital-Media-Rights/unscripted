<div class="black-header">
  <div class="unscripted-user-menu">
    <?php if ($logged_in): ?>
      <?php print render($page['user_menu']); ?>
    <?php else: ?>
      <ul>
        <li class="menu"><a href="<?php base_path(); ?>user/login">Log In</a></li>
      </ul>
    <?php endif; ?>
  </div>
</div>
<div id="unscripted-header-menu">
<div class="unscripted-header-menu-toolbar clearfix">
  <div class="unscripted-header-menu-icon">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>
  </div>
  <div class="unscripted-header-menu-toolbar-category">
    <?php print render($page['main_menu']); ?>
  </div>
</div>
</div>
<div class="unscripted-content-container-div clearfix">
  <?php if ($messages): ?>
    <div id="messages">
      <div class="section clearfix">
        <?php print $messages; ?>
      </div>
    </div>
  <?php endif; ?>
   
  <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
  <?php endif; ?>
   
  <h1><?php print $title; ?></h1>
   
  <?php print render($page['content']); ?>
</div>
<div class="unscripted-footer">
  <hr />
  <div class="unscripted-footer-text">
    &copy; 2015 unscripted. All rights reserved.
  </div>
</div>
