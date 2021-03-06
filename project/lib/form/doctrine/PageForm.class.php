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
    unset($this['created_at'], $this['updated_at'], $this['slug']);

    $this->widgetSchema->setLabels(array(
            'parent_id'=> 'Parent page',
            'porder'=>'Order'
    ));


    $this->widgetSchema['abstract'] = new sfWidgetFormTextarea();

    $this->widgetSchema['abstract']->setAttribute('cols', 50);
    $this->widgetSchema['abstract']->setAttribute('rows', 2);


    $this->widgetSchema['description'] = new sfWidgetFormTextareaTinyMCE(array(
                    'width' => 500,
                    'height' => 250,
                    'config' => 'theme_advanced_disable: "cleanup, help, charmap, visualaid, styleselect"'
    ));

    // categories_list
    $this->widgetSchema['categories_list'] = new sfWidgetFormDoctrineChoice(array(
                    'expanded' => true,
                    'multiple' => true,
                    'model' => 'Category'
    ));

    // Picture
    $this->widgetSchema['picture'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Picture',
      'file_src' => '/uploads/'.$this->getObject()->get('id').'/img_'.$this->getObject()->get('id').'_250x141.jpg',
      'is_image' => true,
      'edit_mode' => !$this->isNew(),
      'template' => '<div>%file%<br />%input%<br />%delete%
      %delete_label%</div>',
    ));
    $this->validatorSchema['logo_delete'] = new sfValidatorPass();


    $this->validatorSchema['picture'] = new sfValidatorFile(array(
                    'required'   => false,
                    'path'       => sfConfig::get('sf_upload_dir').'/pictures',
                    'mime_types' => 'web_images',
    ));
  }
}
