<?php use_helper('I18N') ?>
<?php use_stylesheet('/sfDoctrineMooDooPlugin/css/generator.list.css') ?>

<?php //use_stylesheet('backend/base.css') ?>
<?php //use_stylesheet('backend/users.css') ?>

<div class="sf_admin_list" id="sf_admin_container" >
<h1><?php echo __('Permission list'); ?></h1>
<div class="admin_container">
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sf_guard_permissions as $sf_guard_permission): ?>
    <tr>
      <td><a href="<?php echo url_for('permissions/edit?id='.$sf_guard_permission->getId()) ?>"><?php echo $sf_guard_permission->getId() ?></a></td>
      <td><?php echo $sf_guard_permission->getName() ?></td>
      <td><?php echo $sf_guard_permission->getDescription() ?></td>
      <td><?php echo $sf_guard_permission->getCreatedAt() ?></td>
      <td><?php echo $sf_guard_permission->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>