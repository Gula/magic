<?php use_helper('Date') ?> <div class="span-18">
  <?php include_component('default', 'slideshow', array('eventsList' => $eventsList)) ?>
  <div id="gallery" class="clearfix"></div>
    <div id="boxNovedades">
      <ul class="novedades">

        <li class="shows">
          <?php echo link_to(image_tag($betterShow->getRawValue()->getImageSrc('mugshot', 'small'), array('alt'=>'Show', 'width'=>'130', 'height'=>'130', 'class'=>'novedades-imagen') ), '@page_slug?slug=espectaculos') ?>
          <?php echo link_to('Shows destacados', '@page_slug?slug=espectaculos', array('class'=>'imagereplacement')) ?>
        </li>

        <li class="promos">
          <?php echo link_to(image_tag('box_promos_imagen.jpg', array('alt'=>'Promos', 'width'=>'130', 'height'=>'130', 'class'=>'novedades-imagen') ), '@page_slug?slug=promociones') ?>
          <?php echo link_to('Promos', '@page_slug?slug=promociones', array('class'=>'imagereplacement')) ?>
        </li>

        <li class="torneos">
          <?php echo link_to(image_tag('box_torneos_poker.jpg', array('alt'=>'Toneos', 'width'=>'130', 'height'=>'130', 'class'=>'novedades-imagen') ), '@page_slug?slug=torneos-de-cartas') ?>
          <?php echo link_to('Torneos', '@page_child_slug?parentslug=casino&slug=torneos-de-cartas&level=1', array('class'=>'imagereplacement')) ?>
        </li>

        <li class="hotel">
          <?php echo link_to(image_tag('box_hotel_stat.jpg', array('alt'=>'Hotel', 'width'=>'130', 'height'=>'130', 'class'=>'novedades-imagen') ), '@page_child_slug?parentslug=hotel&slug=promos&level=1') ?>
          <?php echo link_to('Beneficios', '@page_child_slug?parentslug=hotel&slug=promos&level=1', array('class'=>'imagereplacement')) ?>
        </li>

        <li class="fotos">
          <?php echo link_to(image_tag('box_fotos_sabina.jpg', array('alt'=>'Fotos', 'width'=>'130', 'height'=>'130', 'class'=>'novedades-imagen') ), '@photos') ?>
          <?php echo link_to('Fotos', '@photos', array('class'=>'imagereplacement')) ?>
        </li>

      </ul>
    </div>
  </div>
<div class="span-5 last">
  <ul class="drawers">
    <img src="images/titulo_agenda.png" width="232" height="34" alt="Agenda" />
    <?php foreach ($showList as $event) : ?>
    <?php include_partial('show', array('event' => $event)) ?>
    <?php endforeach; ?>
  </ul>
</div>