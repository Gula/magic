<?php use_helper('I18N') ?>
<?php use_stylesheet('mooDoo.2/generator.global.css') ?>
<?php use_stylesheet('mooDoo.2/generator.list.css') ?>

<?php use_stylesheet('backend/base.css') ?>
<?php use_stylesheet('backend/users.css') ?>

<section class="sf_admin_list">
<h1><?php echo __('Users list'); ?></h1>

<table>
  <thead>
    <tr>
      <th><?php echo __('Username'); ?></th>
      <th><?php echo __('First name'); ?></th>
      <th><?php echo __('Last name'); ?></th>
      <th><?php echo __('Is active'); ?></th>
      <th><?php echo __('Is super admin'); ?></th>
      <th><?php echo __('Last login'); ?></th>

    </tr>
  </thead>

  <tfoot>
    <tr>
      <td class="6">&nbsp;</td>
    </tr>
  </tfoot>
  <tbody>
    <?php foreach ($sf_guard_users as $sf_guard_user): ?>
    <tr>
      
      <td><a href="<?php echo url_for('users/edit?id='.$sf_guard_user->getId()) ?>"><?php echo $sf_guard_user->getUsername() ?></a></td>
      <td><?php echo $sf_guard_user->getProfile()->getFirstName() ?></td>
      <td><?php echo $sf_guard_user->getProfile()->getLastName() ?></td>
      
      <td><?php echo $sf_guard_user->getIsActive() ?></td>
      <td><?php echo $sf_guard_user->getIsSuperAdmin() ?></td>
      <td><?php echo $sf_guard_user->getLastLogin() ?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</section>