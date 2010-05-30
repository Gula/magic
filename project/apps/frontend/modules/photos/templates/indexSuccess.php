<div class="span-24 photos">
  <div class="contenido">
    <div class="gallery">
      <ul>
        <?php foreach ($mg_albums as $mg_album): ?>
        <li>
          <h1><?php echo $mg_album->getTitle() ?></h1>
          <p><?php echo $mg_album->getDescription() ?></p>
          <ul>
            <?php foreach ($mg_album->getGalleries() as $mg_gallery) : ?>
            <li>
              <?php include_component('mgGallery', 'ul_gallery', array('mg_gallery' => $mg_gallery, 'options' => array('size' => 'thumb'))) ?>
              <?php endforeach; ?>
            </li>
          </ul>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <div class="alpha"></div>
  <?php $page_id = 4 ?>
  <?php echo image_tag('/uploads/'.$page_id.'/img_'.$page_id.'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
</div>