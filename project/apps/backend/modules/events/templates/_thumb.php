<?php
$config = sfConfig::get('app_sfDoctrineJCroppablePlugin_models');
$dir = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.$config['Events']['directory'];
$image = $event->getImageSrc('mugshot', 'original');

$file = $dir.DIRECTORY_SEPARATOR.$event->getMugshot();
?>

<?php if(file_exists($file)) : ?>
  <?php echo $event->getRawValue()->getImageTag('mugshot', 'tiny') ?>
<?php else : ?>
<?php echo image_tag('events/no_file.png'); ?>
<?php endif; ?>