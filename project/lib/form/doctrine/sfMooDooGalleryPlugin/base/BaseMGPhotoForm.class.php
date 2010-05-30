<?php

/**
 * MGPhoto form base class.
 *
 * @method MGPhoto getObject() Returns the current form's model object
 *
 * @package    magic
 * @subpackage form
 * @author     Damian Suarez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMGPhotoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'author_id'      => new sfWidgetFormInputText(),
      'title'          => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'photo'          => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'galleries_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MGGallery')),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'author_id'      => new sfValidatorInteger(array('required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 100)),
      'description'    => new sfValidatorString(array('required' => false)),
      'photo'          => new sfValidatorString(array('max_length' => 255)),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'galleries_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MGGallery', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mg_photo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MGPhoto';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['galleries_list']))
    {
      $this->setDefault('galleries_list', $this->object->Galleries->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveGalleriesList($con);

    parent::doSave($con);
  }

  public function saveGalleriesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['galleries_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Galleries->getPrimaryKeys();
    $values = $this->getValue('galleries_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Galleries', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Galleries', array_values($link));
    }
  }

}
