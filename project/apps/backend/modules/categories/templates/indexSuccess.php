<?php use_helper('I18N', 'Date') ?>
<?php use_stylesheet('mooDoo.2/generator.global.css') ?>
<?php use_stylesheet('mooDoo.2/generator.list.css') ?>

<?php use_stylesheet('backend/base.css') ?>
<?php use_stylesheet('backend/pages.css') ?>

<section class="sf_admin_list">
  <h1><?php echo __('Categorys List'); ?></h1>

  <table>
    <thead>
      <tr>
        <th><?php echo __('Title'); ?></th>
        <th><?php echo __('Description'); ?></th>
        <th><?php echo __('Parent'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($categorys as $category): ?>
      <tr>
        <td><a href="<?php echo url_for('categories/edit?id='.$category->getId()) ?>"><?php echo $category->getTitle() ?></a></td>
        <td><?php echo $category->getRawValue()->getDescription() ?></td>
        <td><?php echo ($category->getParent() == '') ? '&mdash;' : $category->getParent() ?></td>
      </tr>

      <?php endforeach; ?>
    </tbody>
  </table>

</section>