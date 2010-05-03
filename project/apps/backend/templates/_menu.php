<nav class="menu">
  <ul>
    <li class="current"><a href="#">Inicio</a></li>
    <li>
      <a href="#"><?php echo __('Content'); ?></a>
      <ul>
        <li>
          <a href="#"><?php echo __('Pages'); ?></a>
          <ul>
            <li><?php echo link_to(__('List'), 'pages/index') ?></li>
            <li><?php echo link_to(__('Add page'), 'pages/new') ?></li>
          </ul>
        </li>

        <li>
          <a href="#"><?php echo __('Events'); ?></a>
          <ul>
            <li><?php echo link_to(__('List'), 'events/index') ?></li>
            <li><?php echo link_to(__('Add event'), 'events/new') ?></li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <a href="#"><?php echo __('Configuration'); ?></a>
      <ul>
        <li>
          <a href="#"><?php echo __('Users'); ?></a>
          <ul>
            <li><?php echo link_to(__('List'), 'users/index') ?></li>
            <li><?php echo link_to(__('Add user'), 'users/new') ?></li>
            <li><?php echo link_to(__('Groups'), 'groups/index') ?></li>
            <li><?php echo link_to(__('Permissions'), 'permissions/index') ?></li>
          </ul>
        </li>

        <li>
          <a href="#"><?php echo __('Categories'); ?></a>
          <ul>
            <li><?php echo link_to(__('List'), 'categories/index') ?></li>
            <li><?php echo link_to(__('Add category'), 'categories/new') ?></li>
          </ul>
        </li>
        
      </ul>
    </li>
  </ul>
</nav>