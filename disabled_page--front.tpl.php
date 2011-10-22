<?php include 'includes/header.inc'; ?>
<?php if ($page['pitch']): ?>
    <div class="pitch">
      <?php print render($page['pitch']); ?>
    </div>
  <?php endif ?>

<div id="main" class="container">
  <?php $tabs && print render($tabs); ?>

  <h1><?php print $title; ?></h1>
  <div class="content">
    <?php print render($page['content']); ?>
  </div>
<div class="screenshots">
    <h2>See it in action</h2>
    <img id="screenshot" src="<?php print base_path() . path_to_theme(); ?>/img/placeholder.jpg" alt="Screenshot" />
    <ul>
      <li>
        <a class="1" href="#">
          <img src="<?php print base_path() . path_to_theme(); ?>/img/thumbnail1.jpg" title="Select Where the shot was placed"  alt="Thumbnail to show New Shot screenshot"/>
        </a>
      </li>
      <li>
        <a class="2" href="#">
          <img src="<?php print base_path() . path_to_theme(); ?>/img/thumbnail2.jpg" title="Log all of your shots" alt="Thumbnail to show Log screenshot" />
        </a>
      </li>
      <li>
        <a class="3" href="#">
          <img src="<?php print base_path() . path_to_theme(); ?>/img/thumbnail3.jpg" title="Schedule reminders" alt="Thumbnail to show New Schedule screenshot" />
        </a>
      </li>
    </ul>
  </div>  
</div>
<?php include 'includes/footer.inc';
