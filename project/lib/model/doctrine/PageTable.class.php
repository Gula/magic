<?php


class PageTable extends Doctrine_Table {

  public static function getInstance() {
    return Doctrine_Core::getTable('Page');
  }

  static public function retrievePages() {
    $q = Doctrine_Query::create()
      ->from('Page p')
      ->leftJoin('p.PageCategory pc')
      ->where('pc.category_id= ?', 1);
    return $q->execute();
  }
}