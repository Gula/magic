<section class="mini-panel">
  <div><strong><?php echo $sf_user->getGuardUser() ?></strong></div>
  <nav>
    <?php echo link_to(__('Logout'), 'sfGuardAuth/signout') ?> | <?php echo $sf_user->getCulture() ?>
  </nav>
</section>