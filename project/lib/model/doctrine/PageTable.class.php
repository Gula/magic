<?php


class PageTable extends Doctrine_Table {

  public static function getInstance() {
    return Doctrine_Core::getTable('Page');
  }

  static public function retrievePagesToMainMenu() {
    $q = Doctrine_Query::create()
      ->from('Page p')
      ->leftJoin('p.PageCategory pc')
      ->where('pc.category_id= ?', 1);
    return $q->execute();
  }

  static public function retrievePagesToMainSlideshow() {
    $q = Doctrine_Query::create()
      ->from('Page p')
      ->leftJoin('p.PageCategory pc')
      ->where('pc.category_id= ?', 2);
    return $q->execute();
  }

  static public function retrieveFooterPagers() {
    $q = Doctrine_Query::create()
      ->from('Page p')
      ->leftJoin('p.PageCategory pc')
      ->where('pc.category_id= ?', 8);
    return $q->execute();
  }
}
