<div class="span-18">

  <?php include_component('default', 'slideshow') ?>

  <div class="clearfix"></div>
  <div id="boxNovedades">
    <ul class="novedades">
      <li class="shows"><img src="images/box_shows_wisinyandel.jpg" width="130" height="130" class="novedades-imagen" /><a href="">Shows destacados</a></li>
      <li class="promos"><span class="shows"><img src="images/box_promos_convertiteas.jpg" width="130" height="130" class="novedades-imagen" /></span><a href="">Promos destacadas</a></li>
      <li class="torneos"><span class="shows"><img src="images/box_torneos_poker0310.jpg" width="130" height="130" class="novedades-imagen" /></span><a href="">Torneos destacados</a></li>
      <li class="hotel"><span class="shows"><img src="images/box_hotel_stat.jpg" width="130" height="130" class="novedades-imagen" /></span><a href="">Promos Hotel destacadas</a></li>
      <li class="fotos"><span class="shows"><img src="images/box_fotos_sabina.jpg" width="130" height="130" class="novedades-imagen" /></span><a href="">Fotos de eventos</a></li>
    </ul>
  </div>
</div>

<div class="span-5 last">
  <ul class="drawers">
    <img src="images/titulo_agenda.png" width="232" height="34" alt="Agenda" />


    <?php foreach ($eventsList as $event) : ?>

    <li class="drawer">
      <h2 class="drawer-handle open"><?php echo $event ?></h2>
      <ul>
        <li class="drawer-foto">
        <?php echo $event->getRawValue()->getImageTag('mugshot', 'medium') ?>
        </li>
        <li class="drawer-texto"><div><?php echo $event->getRawValue()->getDescription() ?></div></li>
      </ul>
    </li>

    <?php endforeach; ?>

  </ul>
</div>