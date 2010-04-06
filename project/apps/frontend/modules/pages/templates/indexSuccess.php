<?php
//if($childPage) $pages
?>

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

    <div class="titulo"><h3><?php echo $page->getAbstract() ?></h3></div>
    <div class="slideshow-paginas" id="slideshow-paginas">
      <div class="slide-wrapper-paginas">
        <ul>

          <?php if($childPage) : ?>
          <?php $realPage = $childPage->getChildren() ?>
          <?php else : ?>
          <?php $realPage = $page->getChildren() ?>
          <?php endif; ?>

          <?php foreach ($realPage as $child) : ?>
          <li class="subpagina">            
              <?php echo image_tag('/uploads/'.$child->get('id').'/img_'.$child->get('id').'_250x141.jpg', array('class' => 'imagen-subpagina')) ?>
            <p class="titulo-subpagina"><?php echo $child ?></p>
            <span class="resumen-subpagina"><?php echo $child->getRawValue()->getDescriptionAbstract() ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <?php if($childPage) : ?>
    <div class="subpagina-contenido">
      <h3><?php echo $childPage ?></h3>
      <?php echo $childPage->getRawValue()->getDescription() ?>
    </div>
    <?php endif; ?>
  </div>

  <div class="alpha"></div>
  <?php if($childPage) : ?>
  <?php echo image_tag('/uploads/'.$childPage->get('id').'/img_'.$childPage->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
  <?php else : ?>
  <?php echo image_tag('/uploads/'.$page->get('id').'/img_'.$page->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
  <?php endif; ?>
</div>