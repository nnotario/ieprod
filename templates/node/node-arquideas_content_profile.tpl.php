<?php
// $Id: node.tpl.php 7510 2010-06-15 19:09:36Z sheena $
?>

<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  <div class="inner">
    <?php print $picture ?>

    <?php if ($page == 0): ?>
    <h2 class="title"><?php print $name ?></h2>
    <?php endif; ?>

    <?php if ($node_top && !$teaser): ?>
    <div id="node-top" class="node-top row nested">
      <div id="node-top-inner" class="node-top-inner inner">
        <?php print $node_top; ?>
      </div><!-- /node-top-inner -->
    </div><!-- /node-top -->
    <?php endif; ?>

    <?php if ($submitted && $page==1): ?>
    <div class="meta">
      <span class="submitted"><?php print $submitted ?></span>
    </div>
    <?php endif; ?>

    <?php if ($terms): ?>
    <div class="terms">
      <?php print $terms; ?>
    </div>
    <?php endif;?>

    <div class="content clearfix<?php print ($node_right && !$teaser?' node-right':''); ?>">
        <div class="node-content-main">
            <?php print $content ?>
        </div>
        <?php if ($node_right && !$teaser): ?>
        <div class="node-right">
            <div class="node-right-inner inner">
                <?php print $node_right; ?>
            </div><!-- /node-right-inner -->
        </div><!-- /node-right -->
        <?php endif; ?>
    </div>

    <?php if ($links): ?>
    <div class="links">
      <?php print $links; ?>
    </div>
    <?php endif; ?>
  </div><!-- /inner -->

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom" class="node-bottom row nested">
    <div id="node-bottom-inner" class="node-bottom-inner inner">
      <?php print $node_bottom; ?>
    </div><!-- /node-bottom-inner -->
  </div><!-- /node-bottom -->
  <?php endif; ?>
</div><!-- /node-<?php print $node->nid; ?> -->
