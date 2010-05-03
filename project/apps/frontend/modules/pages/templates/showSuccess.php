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


    <?php if($childPage) : ?>
      <?php
      $realPage = $childPage;
      $realPages = $childPage->getChildren();
      ?>
    <?php else : ?>
      <?php
      $realPages = $page->getChildren();
      $realPage = $page;
      ?>
    <?php endif; ?>

    <div class="main-show">
      <h2><?php echo link_to($mainShow, 'pages/index') ?></h2>
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
        <span class="count-event"><?php echo count($show['events']) ?></span>
        <h2><?php echo $show['title'] ?></h2>

        <div>
          <ul>
                <?php foreach ($show['events'] as $event) : ?>
            <li>
              <h3><?php echo $event ?></h3>
              <h4><?php echo format_date($event->getDate(), 'dd-MM-y hh:mm')?></h4>
              <div class="img-placeholder sticky-<?php echo $event->get('sticky') ?>">
              <?php
                if(is_file(sfConfig::get('sf_web_dir').'/'.$event->getImageSrc('mugshot', 'small'))) {
                  $img_url = $event->getImageSrc('mugshot', 'small');
                }
                else {
                  $img_url = '/images/no-image-event.png';
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
        </div>
      </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <?php /* ?>
    <div class="noticia-bloque" id="noticia-bloque">
      <div class="titulo"><h3><?php echo $realPage->getAbstract() ?></h3></div>

      <?php if($realPages->count() > 0) : ?>
      <!-- carousel -->
      <div class="slideshow-paginas" id="slideshow-paginas">
        <div class="slide-wrapper-paginas">
          <ul>
              <?php foreach ($realPages as $child) : ?>
                <?php include_partial('slide_element', array('page' => $child, 'level' => $level)) ?>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endif; ?>

      <?php if($realPages->count() > 3) : ?>
      <a href="#" class="arrow arrow-left"></a>
      <a href="#" class="arrow arrow-right"></a>
      <?php endif; ?>


      <?php //if($childPage) : ?>
      <div class="subpagina-contenido">
        <h3><?php echo $realPage ?></h3>
        <?php echo $realPage->getRawValue()->getDescription() ?>
      </div>
      <?php //endif; ?>
    </div>
    */ ?>
  </div>


  <div class="alpha"></div>
  <?php
  $arr_filename = explode ('.', $mainShow->getMugshot());
  $filename = $arr_filename[0].'_950x534.'.$arr_filename[1];
  echo image_tag('/uploads/events/'.$filename, array('class' => 'imagen-fondo'));
  ?>

  <?php /*if($childPage) : ?>
    <?php echo image_tag('/uploads/'.$childPage->get('id').'/img_'.$childPage->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
  <?php else : ?>
    <?php echo image_tag('/uploads/'.$page->get('id').'/img_'.$page->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
  <?php endif; */ ?>
</div>