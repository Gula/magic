<div id="header">
  <div id="logo" class="span-5"><h1><a href="index.html">Casino Magic</a></h1></div>
  <div id="nav" class="span-19 last">
    <div class="span-9 prepend-10 last" id="global">Iconos Globales</div>
    <div id="menu">
      <ul class="menu">
        <?php foreach ($optionesMenu as $option) : ?>
        <li id="<?php echo $option->getSlugize() ?>">
          <?php echo link_to($option, 'pages/index?id='.$option->get('id'), array('title' => $option)) ?>
        </li>
        <?php endforeach; ?>
        <li id="search"><label for="search"><input border="0" id="searchInput" /></label></li>
      </ul>
    </div>
  </div>
</div>