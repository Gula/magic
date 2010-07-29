<?php use_helper('Date') ?>
<div class="clear"></div>
<div class="footer">

  <div class="footer-menu">
    <?php foreach ($footer_pagers as $page) : ?>
    <?php $children =  $page->get('children') ?>
    <div class="<?php echo $page->getSlugize() ?>">
      <h2><?php echo $page ?></h2>
      <ul>
        <?php foreach ($children as $child) : ?>
        <li><?php echo link_to($child, 'pages/index?id='.$child->get('id')) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php endforeach; ?>
    
	<div class="social">
      <h2>Social Networks</h2>
      <ul>
        <li><a href="http://www.facebook.com/casino.magic" target="_blank">Facebook</a></li>
      </ul>
    </div>
    
	<div class="comollegar">
      <h2><a href="http://www.casinomagic.com.ar/pages?id=85">C&oacute;mo llegar?</a></h2>
      <ul>
        <li><a href="http://www.casinomagic.com.ar/pages?id=85">Teodoro Planas 4005<br />
        Neuqu&eacute;n - Argentina<br />
        0800 666 2442</a></li>
      </ul>
    </div>
  
  </div>
<div class="clear"></div>
	<div class="signature"><p>&copy; Copyright 2010 Hotel Casino Magic. Todos los derechos reservados.</p></div>
</div>
