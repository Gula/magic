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
    <?php
    if($sf_context->getModuleName() == 'pages') {
      $page = Doctrine::getTable('Page')->find($sf_request->getParameter('id'));
      $id = 'pagina-'.$page->getSlugize();
    }

    ?>
    <div class="container" <?php if(isset($id)) echo 'id="'.$id.'"' ?>>
      <?php include_component('default', 'header') ?>

      <?php echo $sf_content ?>
      
      <hr />
      <div>Pie del sitio</div>
    </div>
    
  </body>
</html>
