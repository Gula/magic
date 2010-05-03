<li class="drawer">
  <div class="drawer-handle open"><strong><?php echo $event ?></strong> - <?php echo format_date($event->getDate(), 'dd-MM') ?></div>
  <div class="accordion-container">
    <img src="<?php echo $event->getRawValue()->getImageSrc('mugshot', 'medium') ?>" width="200" height="200" />
    <div class="drawer-texto"><?php echo $event->getRawValue()->getDescription() ?></div>
  </div>
</li>