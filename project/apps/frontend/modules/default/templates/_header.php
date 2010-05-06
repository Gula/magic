<div id="header">
  <div id="logo" class="span-5"><h1><?php echo link_to('Casino Magic', 'default/index') ?></h1></div>
  <div id="nav" class="span-19 last">
    <div class="span-9 prepend-10 last" id="global">
    	<ul class="above-menu">
    		<li id="mapa"><a href="javascript:;">Mapa del sitio</a></li>
    		<li id="facebook"><a href="javascript:;">Agreganos a tu Facebook</a></li>
    		<li id="contactenos"><a href="javascript:;">Contactenos</a></li>
    		<li id="login"><a href="/backend.php/">Acceder al administrador</a></li>
    		<li id="reservas"><a href="javascript:;">Reservas Hotel</a>
    			<ul>
    				<li><!-- iframe src="http://www.idiso.com/csl/reservations/jsp/C_Search_Dates.jsp?&codigoHotel=1652&lang=es&idPartner=CASINOMAGIC&idPrm=MBCASINOMG&idONg=P25&idNom=webpropia" width="420" height="50" frameborder="0" allowtransparency="true" id="iframeBEIdiso"></iframe --></li>
    			</ul>
    		</li>
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