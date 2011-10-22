<?php
  !empty($content['upload']) && hide($content['upload']);
  !empty($content['taxonomy_vocabulary_1']) && hide($content['taxonomy_vocabulary_1']);
  !empty($content['links']) && hide($content['links']);
?>
  <?php if (!$page) { ?>
    <?php print render($title_prefix); ?>
    <h2>
      <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
    <?php print render($title_suffix); ?>
  <?php } ?>
  <?php if ($submitted) { ?>
    <div class="meta mute">
      <span class="submitted">
        <?php print format_date($node->created); ?>
      </span>
      &mdash;
      Topic:
      <?php print render($content['taxonomy_vocabulary_1']); ?>
    </div>
  <?php } ?>
  <?php
    print render($content);
    print render($content['links']);
  ?>
