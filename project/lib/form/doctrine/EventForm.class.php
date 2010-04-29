<?php

/**
 * Event form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EventForm extends BaseEventForm
{
  public function configure()
  {
    unset(
      $this['created_at'],
      $this['updated_at']
    );

    // categories_list
    $this->widgetSchema['categories_list'] = new sfWidgetFormDoctrineChoice(array(
      'expanded' => true,
      'multiple' => true,
      'model' => 'Category'
    ));

    $this->widgetSchema['date'] = new sfWidgetFormInputText(
      array(
        'type'=> 'date'
      ),
      array(
        'class' => 'input_date'
      )
    );

    //'title'            => new sfWidgetFormInputText(),
    //'date'             => new sfWidgetFormDateTime(),


    $this->widgetSchema['description'] = new sfWidgetFormTextareaTinyMCE(array(
      'width' => 500,
      'height' => 250,
      'config' => 'theme_advanced_disable: "cleanup, help, charmap, visualaid, styleselect"'
    ));

    /*
    // Thumbnail del evento
    $dir = '/images/events/'.$this->getObject()->get('id');
    $file = $dir.'/img_'.$this->getObject()->get('id').'_130x130.png';

    $this->widgetSchema['image'] = new sfWidgetFormInputFileEditable(array(
      'label' => 'Image',
      'file_src' => $file,
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
    ));

    $this->validatorSchema['image'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/events',
      'mime_types' => 'web_images',
    ));
     *
     */

    $this->getObject()->configureJCropWidgets($this);
    $this->getObject()->configureJCropValidators($this);

  }
}
