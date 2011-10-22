<footer>
  <div class="container">
    <?php if ($page['fat_footer_primary']): ?>
      <div class="fat-footer-primary">
        <?php print render($page['fat_footer_primary']); ?>
      </div>
    <?php endif; ?>
    <?php if ($page['fat_footer_secondary']): ?>
      <div class="fat-footer-secondary">
        <?php print render($page['fat_footer_secondary']); ?>
      </div>
    <?php endif; ?>
    <?php if ($page['fat_footer_tertiary']): ?>
      <div class="fat-footer-tertiary">
    <?php print render($page['fat_footer_tertiary']); ?>
     </div>
    <?php endif; ?>
    <?php if ($page['footer']): ?>
      <div class="fat-footer-tertiary">
        <?php print render($page['footer']); ?>
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
</footer>
