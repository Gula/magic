<div class="slideshow" id="slideshow">
  <div class="slide_wrapper">
    <?php foreach ($pages as $page) : ?>
    <div class="picture">
      <?php echo image_tag('/uploads/'.$page->get('id').'/img_'.$page->get('id').'_720x405.jpg') ?>
      <h3><?php echo $page ?></h3>
      <div class="text"><?php echo $page->getAbstract() ?></div>
    </div>
    <?php endforeach; ?>
  </div>
</div>