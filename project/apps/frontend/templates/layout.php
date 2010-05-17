<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <!--[if IE]>
	<link href="/css/ie.css" media="all" type="text/css" />
	<![endif]-->
  </head>

  <body>
    <?php
    if($sf_context->getModuleName() == 'pages') {
      $page = Doctrine::getTable('Page')->find($sf_request->getParameter('id'));
      $id = 'pagina-'.$page->getSlugize();
    }
    elseif ($sf_context->getModuleName() == 'events') {
      $id = 'pagina-espectaculos';
    }
    ?>
    <div class="wrapper">
      <div class="block"></div>
      <iframe src="http://www.idiso.com/csl/reservations/jsp/C_Search_Dates.jsp?&codigoHotel=1652&lang=es&idPartner=CASINOMAGIC&idPrm=MBCASINOMG&idONg=P25&idNom=webpropia" width="420" height="50" frameborder="0" allowtransparency="true" id="iframeBEIdiso"></iframe>

      <div class="container" <?php if(isset($id)) echo 'id="'.$id.'"' ?>>
        <?php include_component('default', 'header') ?>
        <?php echo $sf_content ?>
        <?php include_component('default', 'footer') ?>
      </div>
    </div>
  </body>
</html>