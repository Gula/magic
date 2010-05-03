<?php use_helper('Date') ?>

<div class="span-24 contenido-<?php echo $page->getSlugize() ?>">
  <div class="contenido">
    <div class="sub-menu">
      <h2><?php echo $page ?></h2>
      <ul>
        <?php foreach ($page->getChildren() as $child) : ?>
        <li><?php echo link_to($child->get('title'), 'pages/index?id='.$child->get('id').'&level=1') ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="main-show">
      <h2><?php echo link_to($mainShow, 'events/index?id='.$mainShow->get('id')) ?></h2>
      <h3><?php echo format_date($mainShow->getDate(), 'dd-MM-y') ?></h3>

      <div class="category">
        <?php foreach($mainShow->getCats() as $cat ) : ?>
        <span><?php echo $cat ?></span>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="shows-wrapper">
      <?php foreach ($shows as $show) : ?>
        <?php if(count($show['events']) > 0) : ?>
      <div class="<?php echo strtolower($show['title']) ?>">
        <span class="count-event"><span>
                <?php $count = count($show['events']); ?>
                <?php echo $count ?>&nbsp;<?php echo ($count > 1) ? 'eventos' : 'evento' ?>
          </span></span>
        <h2><?php echo $show['title'] ?></h2>

        <div>
          <ul>
                <?php foreach ($show['events'] as $event) : ?>
            <li>
              <h3><?php echo link_to($event, 'events/index?id='.$event->get('id')) ?></h3>
              <h4><?php echo format_date($event->getDate(), 'dd-MM-y hh:mm')?>hs</h4>
              <div class="img-placeholder sticky-<?php echo $event->get('sticky') ?>">

              <?php
              if(is_file(sfConfig::get('sf_web_dir').'/'.$event->getImageSrc('mugshot', 'small'))) {
                $img_url = $event->getImageSrc('mugshot', 'small');
              }
              else {
                $img_url = '/images/no-image-event.jpg';
              }
              ?>

                <img src="<?php echo $img_url ?>" width="130" height="130" alt="<?php echo $event ?>" />
              </div>
              <div class="description">
                      <?php echo strip_tags($event->getRawValue()->getDescription()) ?>
              </div>
            </li>
                <?php endforeach; ?>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>


  <div class="alpha"></div>

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