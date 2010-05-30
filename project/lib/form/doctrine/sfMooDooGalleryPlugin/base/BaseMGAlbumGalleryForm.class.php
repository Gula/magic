<?php

/**
 * MGAlbumGallery form base class.
 *
 * @method MGAlbumGallery getObject() Returns the current form's model object
 *
 * @package    magic
 * @subpackage form
 * @author     Damian Suarez
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMGAlbumGalleryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MGGallery'), 'add_empty' => true)),
      'album_id'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'gallery_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MGGallery'), 'required' => false)),
      'album_id'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mg_album_gallery[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MGAlbumGallery';
  }

}
