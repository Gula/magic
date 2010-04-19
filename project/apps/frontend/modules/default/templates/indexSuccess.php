<?php use_helper('Date') ?>

<div class="span-18">

  <?php include_component('default', 'slideshow', array('eventsList' => $eventsList)) ?>

  <div class="clearfix"></div>
  <div id="boxNovedades">
    <ul class="novedades">
      <li class="shows">
        <img src="<?php echo $betterShow->getRawValue()->getImageSrc('mugshot', 'small') ?>" width="130" height="130" class="novedades-imagen" /><a href="">Shows destacados</a>
      </li>
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
      <div class="drawer-handle open"><strong><?php echo $event ?></strong> - <?php echo format_date($event->getDate(), 'M') ?></div>
      <div class="accordion-container">
          <?php echo $event->getRawValue()->getImageTag('mugshot', 'medium') ?>
        <div class="drawer-texto"><?php echo $event->getRawValue()->getDescription() ?></div>
        <div class="accordion-categories">
            <?php foreach($event->getCategories() as $cat) : ?>
              <?php echo $cat ?>
            <?php endforeach; ?>
        </div>
      </div>
    </li>

    <?php endforeach; ?>

  </ul>
</div>