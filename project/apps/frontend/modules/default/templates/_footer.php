<?php use_helper('Date') ?>
<div class="footer">
  <div class="footer-menu">
    <ul>
      <?php foreach ($footer_pagers as $page) : ?>
      <li>
        <?php echo link_to($page, 'pages/index?id='.$page->get('id')) ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <p>&copy; <?php echo date('Y') ?> Hotel Casino Magic. Todos los derechos reservados.</p>
</div>