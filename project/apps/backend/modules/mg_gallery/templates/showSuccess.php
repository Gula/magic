<?php use_helper('I18N', 'Date') ?>
<?php include_partial('mg_photo/assets') ?>
<?php include_partial('mg_photo/assets.edit') ?>

<div id="sf_admin_container" class="admin_new">
  <h1>Galería '<?php echo $gallery ?>'</h1>
  <div class="admin_container">
        <?php include_partial('mg_photo/flashes') ?>

    <div id="sf_admin_header">
      <?php //include_partial('mg_photo/form_header', array('mg_photo' => $mg_photo, 'form' => $form, 'configuration' => $configuration)) ?>
    </div>

    <div id="sf_admin_content">
      <?php //include_partial('mg_photo/form', array('mg_photo' => $mg_photo, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
    </div>

    <div id="sf_admin_footer">
      <?php //include_partial('mg_photo/form_footer', array('mg_photo' => $mg_photo, 'form' => $form, 'configuration' => $configuration)) ?>
    </div>

  </div>
</div>
