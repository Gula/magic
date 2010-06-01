<?php use_helper('I18N') ?>

<div class="span-24 contenido-<?php echo $page->getSlugize() ?>">
  <div class="contenido">
    <div class="sub-menu">
      <h2><?php echo $page ?></h2>
      <?php if ($sf_request->getParameter('id') == 21 and !($isVip)): ?>
      
      <?php else : ?>
      <ul>
        <?php foreach ($page->getChildren() as $child) : ?>
        <li><?php echo link_to($child->get('title'), 'pages/index?id='.$child->get('id').'&level=1') ?></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>


    <?php if($childPage) : ?>
      <?php
        $realPage = $childPage;
        $realPages = $childPage->getChildren();
        ?>
    <?php else : ?>
      <?php
        $realPages = $page->getChildren();
        $realPage = $page;
        ?>
    <?php endif; ?>


    <div class="noticia-bloque" id="noticia-bloque">
      <div class="titulo"><h3><?php echo $realPage->getAbstract() ?></h3></div>

      <?php if($realPages->count() > 0) : ?>
      <?php if ($sf_request->getParameter('id') == 21 and !($sf_user->isAuthenticated() and $isVip)): ?>
      <!-- carousel -->
      <?php else: ?>
      <div class="slideshow-paginas" id="slideshow-paginas">
        <div class="slide-wrapper-paginas">
          <ul>
              <?php foreach ($realPages as $child) : ?>
                <?php include_partial('slide_element', array('page' => $child, 'level' => $level)) ?>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <?php endif; ?>
      <?php endif; ?>

      <?php if($realPages->count() > 3) : ?>
      <a href="#" class="arrow arrow-left"></a>
      <a href="#" class="arrow arrow-right"></a>
      <?php endif; ?>

      <div class="subpagina-contenido">
        <h3><?php echo $realPage ?></h3>
        <?php echo $realPage->getRawValue()->getDescription() ?>
      

      <?php if ($sf_request->getParameter('id') == 21 and !$sf_user->isAuthenticated()) : ?>
      <?php if(isset($form)) : ?>
        <form action="<?php echo url_for('pages/index#signin') ?>" method="post">
        <div id="signin">
          <?php echo $form->renderGlobalErrors() ?>
          <input type="hidden" value="21" name="id" />
          <input type="hidden" value="1" name="level" />
          <?php echo $form->renderHiddenFields() ?>
          <?php echo $form['username']->renderError() ?>
          <?php echo $form['username'] ?>
          <?php echo $form['password']->renderError() ?>
          <?php echo $form['password'] ?>
          <?php echo $form['remember']->renderError() ?>
          <?php echo $form['remember']->renderLabel() ?>
          <?php echo $form['remember'] ?>
          <input type="submit" value="<?php echo __('sign in') ?>" />
        </div>  
      </form>
      <?php endif; ?>

      <?php elseif ($sf_user->isAuthenticated()): ?>
      <p><?php echo link_to('Salir','@sf_guard_signout' ); ?></p>
      <?php endif; ?>
    </div>
    </div>
  </div>


  <div class="alpha"></div>
  <?php if($childPage) : ?>
    <?php echo image_tag('/uploads/'.$childPage->get('id').'/img_'.$childPage->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
  <?php else : ?>
    <?php echo image_tag('/uploads/'.$page->get('id').'/img_'.$page->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
  <?php endif; ?>
</div>