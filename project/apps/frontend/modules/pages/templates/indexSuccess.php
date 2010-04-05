<div class="span-24 contenido-<?php echo $page->getSlugize() ?>">

  <div class="contenido">
    <div class="sub-menu">
      <h2><?php echo $page ?></h2>
      <ul>
        <?php foreach ($page->getChildren() as $child) : ?>
        <li><?php echo link_to($child->get('title'), 'pages/index?id='.$child->get('id')) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="titulo"><h3><?php echo $page->getAbstract() ?></h3></div>
    <div class="slideshow-paginas" id="slideshow-paginas">
      <div class="slide-wrapper-paginas">
        <ul>
          <!-- Version escalada de la imagen de fondo 250x -->
          <?php foreach ($page->getChildren() as $child) : ?>
          <li class="subpagina">            
              <?php echo image_tag('/uploads/'.$child->get('id').'/img_'.$child->get('id').'_250x141.jpg', array('class' => 'imagen-subpagina')) ?>
            <p class="titulo-subpagina"><?php echo $child ?></p>
            <span class="resumen-subpagina"><?php echo $child->getRawValue()->getDescriptionAbstract() ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

  <div class="alpha"></div>
  <?php echo image_tag('/uploads/'.$page->get('id').'/img_'.$page->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
</div>