<?php use_helper('I18N') ?>

<div class="span-24 contenido-<?php echo $page->getSlugize() ?>">
  <div class="contenido">
    <div class="sub-menu">
      <h2><?php echo $page ?></h2>
      <ul>
        <?php foreach ($page->getChildren() as $child) : ?>
        <li><?php echo link_to($child->get('title'), 'pages/index?id='.$child->get('id').'&level=1') ?></li>
        <?php endforeach; ?>
      </ul>
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
      </div>

      <?php if ($sf_request->getParameter('id') == 21 and !$sf_user->isAuthenticated()) : ?>
      <div class="auth">
        <form action="<?php echo url_for('pages/index') ?>" method="post">
        <input type="hidden" value="21" name="id" />
        <input type="hidden" value="1" name="level" />
        <table>
          <?php echo $form->renderGlobalErrors() ?>
           <?php echo $form->renderHiddenFields() ?>
           <tr>
             <td>
              <?php echo $form['username']->renderError() ?>
              <?php echo $form['username'] ?>
            </td>
          </tr>
           <tr>
             <td>
              <?php echo $form['password']->renderError() ?>
              <?php echo $form['password'] ?>
            </td>
          </tr>
       <tr>
             <td>
              <?php echo $form['remember']->renderError() ?>
              <?php echo $form['remember']->renderLabel() ?>
              <?php echo $form['remember'] ?>
            </td>
          </tr>


        </table>

        <input type="submit" value="<?php echo __('sign in') ?>" />
      </form>

      </div>
      <?php else: ?>
      <?php echo link_to('Salir','@sf_guard_signout' ); ?>
      <?php endif; ?>
    </div>
  </div>


  <div class="alpha"></div>
  <?php if($childPage) : ?>
    <?php echo image_tag('/uploads/'.$childPage->get('id').'/img_'.$childPage->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
  <?php else : ?>
    <?php echo image_tag('/uploads/'.$page->get('id').'/img_'.$page->get('id').'_950x534.jpg', array('class' => 'imagen-fondo')) ?>
  <?php endif; ?>
</div>