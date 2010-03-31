<div class="span-24 contenido-<?php echo $page->getSlugize() ?>">

  <div class="contenido">
    <div class="sub-menu">
      <h2><?php echo $page ?></h2>
      <ul>
        <?php foreach ($page->getChildren() as $coco) : ?>
        <li><a href="#"><?php echo $coco->get('title') ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="titulo"><h3><?php echo $page->getAbstract() ?></h3></div>
    <div class="slideshow-paginas" id="slideshow-paginas">
      <div class="slide-wrapper-paginas">
        <ul>
          <li class="subpagina">
            <img class="imagen-subpagina" src="images/paginas/casino_habitaciones_250.jpg" width="" height="" alt="">
            <p class="titulo-subpagina">Habitaciones</p>

            <span class="resumen-subpagina">Donec ultricies orci sit amet neque egestas egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</span>
          </li>

        </ul>
      </div>
    </div>
  </div>



  <div class="alpha"></div>
  <?php echo image_tag('/uploads/'.$page->get('id').'/img_'.$page->get('id').'_950x534.jpg') ?>
</div>