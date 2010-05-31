<?php

/**
 * Event form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EventAdminForm extends BaseEventForm
{
  public function configure()

  {
    unset(
      $this['created_at'],
      $this['updated_at']
    );


    // galleries_list
    $this->widgetSchema['galleries_list'] = new sfWidgetFormDoctrineChoice(array(
        'expanded' => true,
        'multiple' => true,
        'model' => 'MGGallery'
    ));


          $this->widgetSchema['main_slideshow'] = new sfWidgetFormInput(
        array(),
        array(
          'type' => 'checkbox',
          'checked' => $this->getObject()->getIsMainSlide() ? 'checked' : false
        )
      );
          
    if($this->getObject()->isNew()) {
    // galleries_list
      $this->widgetSchema['categories_list'] = new sfWidgetFormInputHidden();
      $this->validatorSchema['categories_list'] = new sfValidatorString(array('required' => false));
    }
    else {
      $this->widgetSchema['categories_list'] = new sfWidgetFormDoctrineChoice(array(
        'expanded' => true,
        'multiple' => true,
        'model' => 'Category'
      ));
      //$this->widgetSchema['main_slideshow'] = new sfWidgetFormInputHidden();
    }

    $this->validatorSchema['main_slideshow'] = new sfValidatorString(array('required' => false));

    $this->widgetSchema['event_cat'] = new sfWidgetFormInputHidden(
      array(),
      array('value' => $this->getObject()->getCatId())
    );
    $this->validatorSchema['event_cat'] = new sfValidatorString(array('required' => false));

    $this->widgetSchema['date'] = new sfWidgetFormDateAndTime(
      array(),
      array( 'class' => 'input_date-time' )
    );
    $this->widgetSchema['date']->setLabel('Fecha del Evento');

    $this->widgetSchema['publication_date'] = new sfWidgetFormInputText(
      array(),
      array( 'class' => 'input_date')
    );
    $this->widgetSchema['publication_date']->setLabel('Fecha de Publicación');

    $this->widgetSchema['due_date'] = new sfWidgetFormInputText(
      array(),
      array('class' => 'input_date')
    );


    $this->widgetSchema['due_date']->setLabel('Fecha de Expiración');

    $this->widgetSchema['description'] = new sfWidgetFormTextareaTinyMCE(array(
      'width' => 500,
      'height' => 250,
      'config' => 'theme_advanced_disable: "cleanup, help, charmap, visualaid, styleselect"'
    ));

    $this->widgetSchema['sticky'] = new sfWidgetFormInputText();
    $this->validatorSchema['sticky'] = new sfValidatorString();

    $this->getObject()->configureJCropWidgets($this);
    $this->getObject()->configureJCropValidators($this);

  }
}
