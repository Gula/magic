<nav class="menu">
  <ul>
    <li><a href="<?php echo url_for('@homepage') ?>"><span class="home"></span><?php echo __('Start'); ?></a></li>
    <li>
      <a href="#"><span class="pages"></span><?php echo __('Pages'); ?></a>
      <ul>
        <li><a href="<?php echo url_for('pages/index') ?>"><span class="list_pages"></span><?php echo __('List'); ?></a></li>
        <li><a href="<?php echo url_for('pages/new') ?>"><span class="add"></span><?php echo __('Add page'); ?></a></li>
      </ul>
    </li>
    <li>
      <a href="#"><span class="events"></span><?php echo __('Events'); ?></a>
      <ul>
        <li><a href="<?php echo url_for('events/index') ?>"><span class="event"></span><?php echo __('List'); ?></a></li>
        <li><a href="<?php echo url_for('events/new') ?>"><span class="add"></span><?php echo __('Add event'); ?></a></li>
      </ul>
    </li>
     
    <li>
      <a href="#"><span class="config"></span><?php echo __('Configuration'); ?></a>
      <ul>
        <li>
          <a href="#"><span class="users"></span><?php echo __('Users'); ?></a>
          <ul>
            <li><a href="<?php echo url_for('users/index') ?>"><span class="users"></span><?php echo __('List'); ?></a></li>
            <li><a href="<?php echo url_for('users/new') ?>"><span class="add"></span><?php echo __('Add user'); ?></a></li>
            <li><?php echo link_to(__('Groups'), 'groups/index') ?></li>
            <li><?php echo link_to(__('Permissions'), 'permissions/index') ?></li>
          </ul>
        </li>

        <li>
          <a href="#"><span class="cats"></span><?php echo __('Categories'); ?></a>
          <ul>
            <li><a href="<?php echo url_for('categories/index') ?>"><span class="cat"></span><?php echo __('List'); ?></a></li>
            <li><a href="<?php echo url_for('categories/new') ?>"><span class="add"></span><?php echo __('Add category'); ?></a></li>
          </ul>
        </li>
        
      </ul>
    </li>
  </ul>
</nav>