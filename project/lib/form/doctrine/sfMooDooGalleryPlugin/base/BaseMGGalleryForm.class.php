<?php

/**
 * MGGallery form base class.
 *
 * @method MGGallery getObject() Returns the current form's model object
 *
 * @package    magic
 * @subpackage form
 * @author     Damian Suarez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMGGalleryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'author_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Author'), 'add_empty' => true)),
      'title'       => new sfWidgetFormInputText(),
      'description' => new sfWidgetFormTextarea(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'albums_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MGAlbum')),
      'photos_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'MGPhoto')),
      'event_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Event')),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'author_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Author'), 'required' => false)),
      'title'       => new sfValidatorString(array('max_length' => 100)),
      'description' => new sfValidatorString(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
      'albums_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MGAlbum', 'required' => false)),
      'photos_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'MGPhoto', 'required' => false)),
      'event_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Event', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mg_gallery[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MGGallery';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['albums_list']))
    {
      $this->setDefault('albums_list', $this->object->Albums->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['photos_list']))
    {
      $this->setDefault('photos_list', $this->object->Photos->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['event_list']))
    {
      $this->setDefault('event_list', $this->object->Event->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveAlbumsList($con);
    $this->savePhotosList($con);
    $this->saveEventList($con);

    parent::doSave($con);
  }

  public function saveAlbumsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['albums_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Albums->getPrimaryKeys();
    $values = $this->getValue('albums_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Albums', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Albums', array_values($link));
    }
  }

  public function savePhotosList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['photos_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Photos->getPrimaryKeys();
    $values = $this->getValue('photos_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Photos', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Photos', array_values($link));
    }
  }

  public function saveEventList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['event_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Event->getPrimaryKeys();
    $values = $this->getValue('event_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Event', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Event', array_values($link));
    }
  }

}
