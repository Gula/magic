<div id="header">
  <div id="logo" class="span-5"><h1><?php echo link_to('Casino Magic', 'default/index') ?></h1></div>
  <div id="nav" class="span-19 last">
    <div class="span-8 prepend-12 last" id="global">
    	<ul class="above-menu">
    		<li id="mapa"><a href="javascript:;">Mapa del sitio</a></li>
    		<li id="facebook"><a href="http://www.facebook.com/casino.magic" target="_blank">Agreganos a tu Facebook</a></li>
    		<!-- <li id="contactenos"><a href="javascript:;">Contactenos</a></li> -->
    		<li id="login"><a href="/backend.php/">Acceder al administrador</a></li>
    		<li id="reservas"><a href="#">Reservas Hotel</a></li>
    	</ul>
    	<span class="telefono">T. Planas 4005, 0800 666 2442</span>
    </div>
    <div id="menu">
      <ul class="menu">
        <?php foreach ($optionesMenu as $option) : ?>
        <li id="<?php echo $option->getSlugize() ?>">
          <?php echo link_to($option, 'pages/index?id='.$option->get('id'), array('title' => $option)) ?>
        </li>
        <?php endforeach; ?>
        <li id="search"><!-- <label for="search"><input border="0" id="searchInput" /></label> --></li>
      </ul>
    </div>
  </div>
</div>