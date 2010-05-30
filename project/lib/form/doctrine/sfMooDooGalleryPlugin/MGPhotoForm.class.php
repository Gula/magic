<?php

/**
 * MGPhoto form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MGPhotoForm extends PluginMGPhotoForm
{
  public function configure()
  {
    // galleries_list
    $this->widgetSchema['galleries_list'] = new sfWidgetFormDoctrineChoice(array(
        'expanded' => true,
        'multiple' => true,
        'model' => 'MGGallery'
    ));
  }
}
