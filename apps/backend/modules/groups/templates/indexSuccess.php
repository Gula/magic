<?php use_helper('I18N') ?>
<?php use_stylesheet('mooDoo.2/generator.global.css') ?>
<?php use_stylesheet('mooDoo.2/generator.list.css') ?>

<?php use_stylesheet('backend/base.css') ?>
<?php use_stylesheet('backend/users.css') ?>

<section class="sf_admin_list">
<h1><?php echo __('Group list'); ?></h1>

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
    <?php foreach ($sf_guard_groups as $sf_guard_group): ?>
    <tr>
      <td><a href="<?php echo url_for('groups/edit?id='.$sf_guard_group->getId()) ?>"><?php echo $sf_guard_group->getId() ?></a></td>
      <td><?php echo $sf_guard_group->getName() ?></td>
      <td><?php echo $sf_guard_group->getDescription() ?></td>
      <td><?php echo $sf_guard_group->getCreatedAt() ?></td>
      <td><?php echo $sf_guard_group->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('groups/new') ?>">New</a>

</section>