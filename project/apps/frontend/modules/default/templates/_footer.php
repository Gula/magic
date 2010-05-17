<?php use_helper('Date') ?>
<div class="clear"></div>
<div class="footer">
  <div class="footer-menu">
    <?php foreach ($footer_pagers as $page) : ?>
    <?php $children =  $page->get('children') ?>
    <div class="<?php echo $page->getSlugize() ?>">
      <h2><?php echo $page ?></h2>
      <ul>
        <?php foreach ($children as $child) : ?>
        <li><?php echo link_to($child, 'pages/index?id='.$child->get('id')) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endforeach; ?>
  </div>
</div>
