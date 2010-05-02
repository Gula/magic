
<div class="slideshow" id="slideshow">

  <div class="slide-wrapper">
    <?php foreach ($pages as $page) : ?>
    <div class="picture">
        <?php echo image_tag('/uploads/'.$page->get('id').'/img_'.$page->get('id').'_720x405.jpg') ?>
      <h3><?php echo $page ?></h3>
      <div class="text"><?php echo $page->getAbstract() ?></div>
    </div>

    <?php endforeach; ?>

    <?php foreach ($eventsList as $event) : ?>
      <?php
      $arr_filename = explode ('.', $event->getMugshot());
      $filename = $arr_filename[0].'_720x405.'.$arr_filename[1];
      ?>

    <div class="picture">
        <?php echo image_tag('/uploads/events/'.$filename) ?>
      <h3><?php echo $event ?></h3>
      <div class="text"><?php echo strip_tags($event->getRawValue()->getDescription()) ?></div>
    </div>
    <?php endforeach; ?>

  </div>
</div>

<div class="slide-index" id="slide-index">
  <ul>
    <?php $count = $pages->count() + $eventsList->count() ?>
    <?php for ($i = 0; $i < $count; $i++) :?>
    <li><?php echo ($i + 1) ?></li>
    <?php endfor; ?>
  </ul>
</div>
