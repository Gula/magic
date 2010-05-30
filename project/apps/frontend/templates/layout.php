<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <script type="text/javascript" src="http://include.reinvigorate.net/re_.js"></script>

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

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9993295-1']);
  _gaq.push(['_setDomainName', '.com.ar']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

try {
reinvigorate.track("t18y5-uy76b08q85");
} catch(err) {}

</script>

  </body>
</html>
