<?php include 'includes/header.inc'; ?>
<?php if ($page['pitch']): ?>
  <div class="pitch">
    <div class="container">
    <h1><?php print $title; ?></h1>
    <?php print render($page['pitch']); ?>
</div>
  </div>
<?php endif ?>
<div id="page" class="container">
  <?php $tabs && print render($tabs); ?>
  <section role='main'>
    <?php print render($page['content']); ?>
  </section>
  <?php if ($page['sidebar_first'] || $page['sidebar_second']): ?>
    <aside>
      <?php $page['sidebar_first'] && print render($page['sidebar_first']); ?>
      <?php $page['sidebar_second'] && print render($page['sidebar_second']); ?>
    </aside>  
  <?php endif ?>
</div>
<?php include 'includes/footer.inc';
