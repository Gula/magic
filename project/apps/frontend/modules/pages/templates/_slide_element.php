<?php
  $level = (isset($level)) ? $level : 1;

  if(is_file(sfConfig::get('sf_upload_dir').'/'.$page->get('id').'/img_'.$page->get('id').'_250x141.jpg')) {
    $img_url = '/uploads/'.$page->get('id').'/img_'.$page->get('id').'_250x141.jpg';
  }
  else {
    $img_url = '/images/page_no_image_250x141.png';
  }
?>

<li class="subpagina">
  <?php echo link_to(image_tag($img_url, array('class' => 'imagen-subpagina')), '@page_child_slug?parentslug='.$parent->get('slug').'&slug='.$page->get('slug').'&level='.$level) ?>
  <p class="titulo-subpagina"><?php echo link_to($page, '@page_child_slug?parentslug='.$parent->get('slug').'&slug='.$page->get('slug').'&level='.$level) ?></p>
  <span class="resumen-subpagina"><?php echo strip_tags($page->getRawValue()->getDescriptionAbstract()) ?></span>
</li>