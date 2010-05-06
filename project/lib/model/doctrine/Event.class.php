<?php

/**
 * Event
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7380 2010-03-15 21:07:50Z jwage $
 */
class Event extends BaseEvent {

  public function save(Doctrine_Connection $conn = null) {
    if($this->get('sticky') == 'no') $this->set('sticky', 1000);

    parent::save($conn);

    /*
    $config = sfConfig::get('app_sfDoctrineJCroppablePlugin_models');
    $dir = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.$config['Events']['directory'];
    $image = $this->getImageSrc('mugshot', 'original');


    if($this->getMugshot() != '') {
      $arr_filename = explode ('.', $this->getMugshot());

      $filename = $arr_filename[0].'_original.'.$arr_filename[1];

      $file = $dir.DIRECTORY_SEPARATOR.$filename;

      if(is_file($file)) {

        $dims = array (
                array('w' => 950, 'h' => 534),
                array('w' => 720, 'h' => 405),
                array('w' => 250, 'h' => 141),
        );

        $size = getimagesize($file);
        $img = new sfImage($file, $size['mime']);

        foreach ($dims as $dim) {

          $img->resize($dim['w'], $dim['h']);
          $img->setQuality(90);
          $img->saveAs($dir.'/'.$arr_filename[0].'_'.$dim['w'].'x'.$dim['h'].'.jpg');
        }
      }
    }
     * 
     */
  }

  public function getCats() {
    $q = Doctrine_Query::create()
            ->from ('Category c')
            ->leftJoin('c.EventCategory ec')
            ->where('ec.event_id = ?', $this->get('id'))
            ->andWhere('c.parent_id = ?', 3);

    return $q->execute();
  }
}
