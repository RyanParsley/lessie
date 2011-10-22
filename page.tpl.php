<?php include 'includes/header.inc'; ?>
 <?php if ($page['pitch']): ?>
    <div class="pitch">
      <div class="container">
        <?php print render($page['pitch']); ?>
      </div>
    </div>
  <?php endif ?>
<div id="main" class="container">
  <?php $tabs && print render($tabs); ?>
  <h1><?php print $title; ?></h1>
  <div class="content">
    <?php print render($page['content']); ?>
  </div>
  <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
    <aside>
      <div class="callout">
        <?php $page['sidebar_first'] && print render($page['sidebar_first']); ?>
      </div>
      <?php $page['sidebar_second'] && print render($page['sidebar_second']); ?>
    </aside>  
  <?php endif ?>
</div>
<?php include 'includes/footer.inc';
