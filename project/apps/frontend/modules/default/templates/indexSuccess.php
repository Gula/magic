<?php use_helper('Date') ?> <div class="span-18">
  <?php include_component('default', 'slideshow', array('eventsList' => $eventsList)) ?>
  <div id="gallery" class="clearfix"></div>
  <div id="boxNovedades">
    <ul class="novedades">


      <li class="shows"><a href="/pages/index?id=4"><img src="<?php echo $betterShow->getRawValue()->getImageSrc('mugshot', 'small') ?>" width="130" height="130" alt="Show" class="novedades-imagen" /></a>
      <a class="imagereplacement" href="pages/index?id=4">Shows destacados</a></li>
      
      <li class="promos"><a href="pages/index?id=5"><img src="images/box_promos_imagen.jpg" width="130" height="130" class="novedades-imagen" /></a>
      <a class="imagereplacement" href="pages/index?id=5">Promos</a></li>
      
      <li class="torneos"><a href="/pages?id=22&level=1"><img src="images/box_torneos_poker.jpg" width="130" height="130" class="novedades-imagen" /></a>
      <a class="imagereplacement" href="/pages?id=22&level=1">Torneos</a></li>
      
      <li class="hotel"><a href="/pages?id=6&level=1"><img src="images/box_hotel_stat.jpg" width="130" height="130" class="novedades-imagen" /></a>
      <a class="imagereplacement" href="/pages?id=6&level=1">Promos Hotel destacadas</a></li>
      
      <li class="fotos"><a href="/photos/index"><img src="images/box_fotos_sabina.jpg" width="130" height="130" class="novedades-imagen" /></a>
      <a class="imagereplacement" href="/photos/index">Fotos</a></li>
    </ul>
  </div> </div> <div class="span-5 last">
  <ul class="drawers">
    <img src="images/titulo_agenda.png" width="232" height="34" alt="Agenda" />
    <?php foreach ($showList as $event) : ?>
    <?php include_partial('show', array('event' => $event)) ?>
    <?php endforeach; ?>
  </ul>
</div>