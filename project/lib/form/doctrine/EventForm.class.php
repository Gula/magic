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
