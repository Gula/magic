<?php use_helper('I18N') ?>
<?php use_stylesheet('mooDoo.2/generator.global.css') ?>
<?php //use_stylesheet('mooDoo.2/generator.edit.css') ?>

<?php use_stylesheet('backend/base.css') ?>
<?php use_stylesheet('backend/users.css') ?>

<h1><?php echo __('New user'); ?></h1>

<?php include_partial('form', array('form' => $form)) ?>