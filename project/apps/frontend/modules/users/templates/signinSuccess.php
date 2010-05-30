<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <table>
    <?php echo $form->renderGlobalErrors() ?>
     <?php echo $form->renderHiddenFields() ?>
     <tr>
       <td>
        <?php echo $form['username']->renderError() ?>
        <?php echo $form['username'] ?>
      </td>
    </tr>
     <tr>
       <td>
        <?php echo $form['password']->renderError() ?>
        <?php echo $form['password'] ?>
      </td>
    </tr>
 <tr>
       <td>
        <?php echo $form['remember']->renderError() ?>
        <?php echo $form['remember']->renderLabel() ?>
        <?php echo $form['remember'] ?>
      </td>
    </tr>


  </table>

  <input type="submit" value="<?php echo __('sign in') ?>" />
  <a href="<?php echo url_for('@sf_guard_password') ?>"><?php echo __('Do you need a new password?') ?></a>
</form>
