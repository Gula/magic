<?php if($event->getCategories()->count() > 0) : ?>
| 
<?php foreach ($event->getCategories() as $cat) : ?>
<span class="cat-<?php echo $cat ?>"><?php echo $cat ?></span> |
<?php endforeach; ?>

  <?php endif; ?>

