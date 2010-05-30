<?php

/**
 * MGGalleryPhoto filter form base class.
 *
 * @package    magic
 * @subpackage filter
 * @author     Damian Suarez
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseMGGalleryPhotoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'gallery_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MGGallery'), 'add_empty' => true)),
      'photo_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MGPhoto'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'gallery_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MGGallery'), 'column' => 'id')),
      'photo_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MGPhoto'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mg_gallery_photo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MGGalleryPhoto';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'gallery_id' => 'ForeignKey',
      'photo_id'   => 'ForeignKey',
    );
  }
}
