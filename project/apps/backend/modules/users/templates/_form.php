<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('users/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>

  <ul>
    <?php echo $form->renderGlobalErrors() ?>
    <li>
      <?php echo $form['username']->renderLabel() ?>
      <div>
        <?php echo $form['username']->renderError() ?>
        <?php echo $form['username'] ?>
      </div>
    </li>

    <li>
      <?php echo $form['Profile']['first_name']->renderLabel() ?>
      <div>
        <?php echo $form['Profile']['first_name']->renderError() ?>
        <?php echo $form['Profile']['first_name'] ?>
      </div>
    </li>

    <li>
      <?php echo $form['Profile']['last_name']->renderLabel() ?>
      <div>
        <?php echo $form['Profile']['last_name']->renderError() ?>
        <?php echo $form['Profile']['last_name'] ?>
      </div>
    </li>

    <li>
      <?php echo $form['is_active']->renderLabel() ?>
      <div>
        <?php echo $form['is_active']->renderError() ?>
        <?php echo $form['is_active'] ?>
      </div>
    </li>
    <li>
      <?php echo $form['is_super_admin']->renderLabel() ?>
      <div>
        <?php echo $form['is_super_admin']->renderError() ?>
        <?php echo $form['is_super_admin'] ?>
      </div>
    </li>

    <li>
      <?php echo $form['groups_list']->renderLabel() ?>
      <div>
        <?php echo $form['groups_list']->renderError() ?>
        <?php echo $form['groups_list'] ?>
      </div>
    </li>
    <li>
      <?php echo $form['permissions_list']->renderLabel() ?>
      <div>
        <?php echo $form['permissions_list']->renderError() ?>
        <?php echo $form['permissions_list'] ?>
      </div>
    </li>
  </ul>


  <div class="edit_actions">
    <?php echo $form->renderHiddenFields(false) ?>
    &nbsp;<a href="<?php echo url_for('users/index') ?>"><?php echo __('Back to list'); ?></a>
    <?php if (!$form->getObject()->isNew()): ?>
    &nbsp;<?php echo link_to('Delete', 'users/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
    <?php endif; ?>
    <input type="submit" value="Save" />
  </div>

</form>
