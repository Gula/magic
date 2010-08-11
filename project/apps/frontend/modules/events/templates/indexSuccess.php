<?php use_helper('Date') ?>
<div class="span-24 contenido-<?php echo $page->getSlugize() ?>">
  <div class="contenido" id="event">
    <div class="sub-menu">
      <h2><?php echo $page ?></h2>
      <ul>
        <?php foreach ($page->getChildren() as $child) : ?>
        <li><?php echo link_to($child->get('title'), '@page_child_slug?parentslug='.$page->get('slug').'&slug='.$child->get('slug')) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>


    <div class="noticia-bloque" id="noticia-bloque">
      <div class="titulo"><h3>
          <?php foreach($event->getCats() as $cat ) : ?>
          <span><?php echo $cat ?></span>
          <?php endforeach; ?>
        </h3></div>

      <div class="subpagina-contenido event">
        <h3><?php echo $event->getTitle() ?></h3>
        <h4><?php echo format_date($event->getDate(), 'dd-MM-y') ?></h4>
        <div class="description">
          <?php echo $event->getRawValue()->getDescription() ?>
        </div>
      </div>
    </div>
  </div>


  <div class="alpha"></div>
<?php include_partial('default/show', array('event' => $event)) ?>
  <?php
  if($event->getMugshot() != '') {
    $arr_filename = explode ('.', $event->getMugshot());
    $filename = $arr_filename[0].'_950x534.'.$arr_filename[1];
  }
  else {
    $filename = 'no-image';
  }

  if(is_file(sfConfig::get('sf_upload_dir').'/events/'.$filename)) {
    $img_url = '/uploads/events/'.$filename;
  }
  else {
    $img_url = '/uploads/'.$page->get('id').'/img_'.$page->get('id').'_950x534.jpg';
  }
  ?>


  <?php echo image_tag($img_url, array('class' => 'imagen-fondo')) ?>

</div>
