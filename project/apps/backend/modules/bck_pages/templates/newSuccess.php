<?php use_helper('I18N') ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>
<?php use_stylesheet('mooDoo.2/generator.global.css') ?>
<?php //use_stylesheet('mooDoo.2/generator.edit.css') ?>

<?php use_stylesheet('backend/base.css') ?>
<?php use_stylesheet('backend/pages.css') ?>

<section class="content">
  <h1><?php echo __('New page'); ?></h1>
  <?php include_partial('form', array('form' => $form)) ?>
</section>