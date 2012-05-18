<header>
  <div class="container">
    <a href="<?php print $front_page; ?>" id="logo">
      <?php if ($site_name): ?>
          <?php print $site_name; ?>
      <?php endif;?>
      <?php if ($logo): ?>
        <img src="<?php print base_path() . path_to_theme(); ?>/img/logo.png" alt="Change me in header include" />
      <?php endif;?>
    </a>

    <?php if ($site_slogan): ?>
      <p class="slogan">
        <?php print $site_slogan; ?>
      </p>
    <?php endif;?>
    <?php if ($page['header']): ?>
      <div class="header-blocks">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
	<?php if ($main_menu): ?>
    	<nav id="navigation" role="navigation"> 
			<?php print theme('links__system_main_menu', array(
				'links' => $main_menu, 
				'attributes' => array(
					'id' => 'main-menu', 'class' => array('inline')
				)
			)); ?> 
        </nav>
    <!-- /.section, /#navigation -->
    <?php endif; ?>
  </div>
</header>
