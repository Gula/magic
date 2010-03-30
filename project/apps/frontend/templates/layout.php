<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>

  <body>
    <div class="container">
      <div id="header">
        <div id="logo" class="span-5"><h1><a href="index.html">Casino Magic</a></h1></div>
        <div id="nav" class="span-19 last">
       	  <div class="span-9 prepend-10 last" id="global">Iconos Globales</div>
          <div id="menu">
            <ul class="menu">
              <li id="hotel"><a href="hotel.html">Hotel</a></li>
              <li id="casino"><a href="casino.html">Casino</a></li>
              <li id="eventos"><a href="hotel.html">Eventos</a></li>
              <li id="espectaculos"><a href="hotel.html">Espect&aacute;culos</a></li>
              <li id="promociones"><a href="hotel.html">Promociones</a></li>
              <li id="gastronomia"><a href="hotel.html">Gastronom&iacute;a</a></li>
              <li id="giftshop"><a href="hotel.html">Gift Shop</a></li>
              <li id="search"><label for="search"><input border="0" id="searchInput" /></label></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="span-18">
        <div class="slideshow">
          <img src="images/imagenes_inicio/foto_01.jpg" />
        </div>
        <div class="clearfix"></div>
        <div id="boxNovedades">
          <ul class="novedades">
            <li class="shows"><img src="images/box_shows_wisinyandel.jpg" width="130" height="130" class="novedades-imagen" /><a href="">Shows destacados</a></li>
            <li class="promos"><span class="shows"><img src="images/box_promos_convertiteas.jpg" width="130" height="130" class="novedades-imagen" /></span><a href="">Promos destacadas</a></li>
            <li class="torneos"><span class="shows"><img src="images/box_torneos_poker0310.jpg" width="130" height="130" class="novedades-imagen" /></span><a href="">Torneos destacados</a></li>
            <li class="hotel"><span class="shows"><img src="images/box_hotel_stat.jpg" width="130" height="130" class="novedades-imagen" /></span><a href="">Promos Hotel destacadas</a></li>
            <li class="fotos"><span class="shows"><img src="images/box_fotos_sabina.jpg" width="130" height="130" class="novedades-imagen" /></span><a href="">Fotos de eventos</a></li>
          </ul>
        </div>
      </div>
      <div class="span-5 last">
        <ul class="drawers">
          <img src="images/titulo_agenda.png" width="232" height="34" alt="Agenda" />
          <li class="drawer">
            <h2 class="drawer-handle open"><img src="images/agenda_titulo_wisin_yandel.png" width="232" height="24" alt="Agenda" /></h2>
            <ul>
              <li class="drawer-foto"><img src="images/agenda_foto_wisin_yandel.jpg" width="200" height="231" /></li>
              <li class="drawer-texto"><div><img src="images/agenda_texto_wisin_yandel.png" width="200" height="78" /></div></li>
            </ul>
          </li>
          <li class="drawer">
            <h2 class="drawer-handle open"><img src="images/agenda_titulo_wisin_yandel.png" width="232" height="24" alt="Agenda" /></h2>
            <ul>
              <li class="drawer-foto"><img src="images/agenda_foto_wisin_yandel.jpg" width="200" height="231" /></li>
              <li class="drawer-texto"><div><img src="images/agenda_texto_wisin_yandel.png" width="200" height="78" /></div></li>
            </ul>
          </li>
          <li class="drawer">
            <h2 class="drawer-handle open"><img src="images/agenda_titulo_wisin_yandel.png" width="232" height="24" alt="Agenda" /></h2>
            <ul>
              <li class="drawer-foto"><img src="images/agenda_foto_wisin_yandel.jpg" width="200" height="231" /></li>
              <li class="drawer-texto"><div><img src="images/agenda_texto_wisin_yandel.png" width="200" height="78" /></div></li>
            </ul>
          </li>
          <li class="drawer">
            <h2 class="drawer-handle open"><img src="images/agenda_titulo_wisin_yandel.png" width="232" height="24" alt="Agenda" /></h2>
            <ul>
              <li class="drawer-foto"><img src="images/agenda_foto_wisin_yandel.jpg" width="200" height="231" /></li>
              <li class="drawer-texto"><div><img src="images/agenda_texto_wisin_yandel.png" width="200" height="78" /></div></li>
            </ul>
          </li>
          <li class="drawer">
            <h2 class="drawer-handle open"><img src="images/agenda_titulo_wisin_yandel.png" width="232" height="24" alt="Agenda" /></h2>
            <ul>
              <li class="drawer-foto"><img src="images/agenda_foto_wisin_yandel.jpg" width="200" height="231" /></li>
              <li class="drawer-texto"><div><img src="images/agenda_texto_wisin_yandel.png" width="200" height="78" /></div></li>
            </ul>
          </li>
          <li class="drawer last">
            <h2 class="drawer-handle open"><img src="images/agenda_titulo_wisin_yandel.png" width="232" height="24" alt="Agenda" /></h2>
            <ul>
              <li class="drawer-foto"><img src="images/agenda_foto_wisin_yandel.jpg" width="200" height="231" /></li>
              <li class="drawer-texto"><div><img src="images/agenda_texto_wisin_yandel.png" width="200" height="78" /></div></li>
            </ul>
          </li>
        </ul>
      </div>
      <hr />
      <div>Pie del sitio</div>
    </div>
    <?php echo $sf_content ?>
  </body>
</html>
