<?php

/**
 * Page form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageForm extends BasePageForm {
  public function configure() {
    unset($this['created_at'], $this['updated_at']);

    $this->widgetSchema->setLabels(array(
            'parent_id'=> 'Parent page'
    ));

    $this->widgetSchema['description'] = new sfWidgetFormTextareaTinyMCE(array(
      'width' => 500,
      'height' => 250,
      'config' => 'theme : "simple", theme_advanced_disable: "anchor,image,cleanup,help, charmap, visualaid, removeformat, code, styleselect"'
    ));


    // categories_list
    $this->widgetSchema['categories_list'] = new sfWidgetFormDoctrineChoice(array(
      'expanded' => true,
      'multiple' => true,
      'model' => 'Category'
    ));

    // Picture
    $this->widgetSchema['picture'] = new sfWidgetFormInputFile(array(
      'label' => 'Picture',
    ));

    $this->validatorSchema['picture'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/pictures',
      'mime_types' => 'web_images',
    ));
  }
}
