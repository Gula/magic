<?php

/**
 * Page
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
class Page extends BasePage {

  public function getSlugize() {
    // Remove all non url friendly characters with the unaccent function
    $text = Doctrine_Inflector::unaccent($this->get('title'));

    if (function_exists('mb_strtolower')) {
      $text = mb_strtolower($text);
    } else {
      $text = strtolower($text);
    }

    // Remove all none word characters
    $text = preg_replace('/\W/', ' ', $text);

    // More stripping. Get rid of all non-alphanumeric.
    $text = strtolower(preg_replace('/[^A-Z^a-z^0-9^\/]+/', '', $text));

    return trim($text, '-');
  }

  /*
  public function generatePictureFilename(sfValidatedFile $file) {
    return $this->getSlugize().'_'.$this->get('id').$file->getExtension();
  }*/

  public function save(Doctrine_Connection $conn = null) {
    parent::save($conn);

    // generamos thumbnails
    $file = sfConfig::get('sf_upload_dir').'/pictures/'.$this->getPicture();

    if(file_exists($file)) {

      $dims = array (
        array('w' => 950, 'h' => 534),
        array('w' => 720, 'h' => 405),
        array('w' => 250, 'h' => 141),
        array('w' => 60, 'h' => 60)
      );

      $size = getimagesize($file);
      $img = new sfImage($file, $size['mime']);

      if(!is_dir(sfConfig::get('sf_upload_dir').'/'.$this->get('id'))) mkdir(sfConfig::get('sf_upload_dir').'/'.$this->get('id'), 0777);

      foreach ($dims as $dim) {
        $img->thumbnail($dim['w'], $dim['h']);
        $img->setQuality(90);

        $img->saveAs(sfConfig::get('sf_upload_dir').'/'.$this->get('id').'/img_'.$this->get('id').'_'.$dim['w'].'x'.$dim['h'].'.jpg');
      }
    }
  }

  public function getChildren() {
    $q = Doctrine_Query::create()
      ->from('Page p')
      ->where('p.parent_id = ?', $this->get('id'));

    return $q->execute();

  }
}
