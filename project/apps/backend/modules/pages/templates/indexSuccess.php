<?php use_helper('I18N', 'Date') ?>
<?php use_stylesheet('mooDoo.2/generator.global.css') ?>
<?php use_stylesheet('mooDoo.2/generator.list.css') ?>

<?php use_stylesheet('backend/base.css') ?>
<?php use_stylesheet('backend/pages.css') ?>

<section class="sf_admin_list">
  <h1><?php echo __('Page list'); ?></h1>


  <table>
    <thead>
      <tr>
        <th><?php echo __('Parent page'); ?></th>
        <th><?php echo __('Author'); ?></th>
        <th><?php echo __('Title'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($pages as $page): ?>
      <tr>
        <td><?php echo $page->getParent() ?></td>
        <td><?php echo $page->getAuthor() ?></td>
        <td><a href="<?php echo url_for('pages/edit?id='.$page->getId()) ?>"><?php echo $page->getTitle() ?></a></td>
        <td><?php echo format_date($page->getCreatedAt(), 'f') ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <a href="<?php echo url_for('pages/new') ?>">New</a>
</section>