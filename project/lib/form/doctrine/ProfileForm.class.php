<?php

/**
 * Profile form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProfileForm extends BaseProfileForm
{
  public function configure()
  {
    $this->widgetSchema['birth_date'] = new sfWidgetFormInputText(
      array(),
      array( 'class' => 'input_date')
    );
    $this->widgetSchema['birth_date']->setLabel('Fecha de nacimiento');
  }
}
