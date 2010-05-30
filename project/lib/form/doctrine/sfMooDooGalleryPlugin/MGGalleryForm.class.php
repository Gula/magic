<?php

/**
 * MGGallery form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MGGalleryForm extends PluginMGGalleryForm
{
  public function configure()
  {
    // albums_list
    $this->widgetSchema['albums_list'] = new sfWidgetFormDoctrineChoice(array(
        'expanded' => true,
        'multiple' => true,
        'model' => 'MGAlbum'
    ));

    // photos_list
    $this->widgetSchema['photos_list'] = new sfWidgetFormDoctrineChoice(array(
        'expanded' => true,
        'multiple' => true,
        'model' => 'MGPhoto'
    ));
  }
}
