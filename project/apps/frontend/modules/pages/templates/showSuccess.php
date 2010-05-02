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
      <h3><?php echo format_date($mainShow->getDate(), 'd-m-y') ?></h3>

      <div class="category">
        <?php foreach($mainShow->getCats() as $cat ) : ?>
        <span><?php echo $cat ?></span>
        <?php endforeach; ?>
      </div>
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