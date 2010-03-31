<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php echo $form->renderGlobalErrors() ?>

<form action="<?php echo url_for('pages/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <?php if (!$form->getObject()->isNew()): ?>

  <input type="hidden" name="sf_method" value="put" />
  <?php endif; ?>


  <ul>
    <li>
      <?php echo $form['parent_id']->renderLabel() ?>
      <span class="select-one">
        <?php echo $form['parent_id']->renderError() ?>
        <?php echo $form['parent_id'] ?>
      </span>
    </li>
    <li>
      <?php echo $form['author_id']->renderLabel() ?>
      <span class="select-one">
        <?php echo $form['author_id']->renderError() ?>
        <?php echo $form['author_id'] ?>
      </span>
    </li>
    <li>
      <?php echo $form['title']->renderLabel() ?>
      <span>
        <?php echo $form['title']->renderError() ?>
        <?php echo $form['title'] ?>
      </span>
    </li>
    <li>
      <?php echo $form['abstract']->renderLabel() ?>
      <span>
        <div>
          <?php echo $form['abstract']->renderError() ?>
          <?php echo $form['abstract'] ?>
        </div>
      </span>
    </li>

    <li>
      <?php echo $form['description']->renderLabel() ?>
      <span>
        <div>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description'] ?>
        </div>
      </span>
    </li>

    <li>
      <div>
        <?php $id = $form->getObject()->get('id') ?>
        <?php echo image_tag('/uploads/'.$id.'/img_'.$id.'_250x141.jpg') ?>
      </div>
      <?php echo $form['picture']->renderLabel() ?>
      <span>
        <div>
          <?php echo $form['picture']->renderError() ?>
          <?php echo $form['picture'] ?>
        </div>
      </span>
    </li>
    
    <li>
      <?php echo $form['categories_list']->renderLabel() ?>
      <span>
        <div>
          <?php echo $form['categories_list']->renderError() ?>
          <?php echo $form['categories_list'] ?>
        </div>
      </span>
    </li>
  </ul>

  <div class="edit_actions">
    <?php echo $form->renderHiddenFields(false) ?>
    &nbsp;<a href="<?php echo url_for('pages/index') ?>">Back to list</a>
    <?php if (!$form->getObject()->isNew()): ?>
    &nbsp;<?php echo link_to('Delete', 'pages/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
    <?php endif; ?>
    <input type="submit" value="Save" />
  </div>

</form>
