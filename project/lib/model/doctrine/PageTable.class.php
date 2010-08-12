<?php


class PageTable extends Doctrine_Table {

  public static function getInstance() {
    return Doctrine_Core::getTable('Page')->orderBy('p.porder, p.id');
  }

  static public function retrievePagesToMainMenu() {
    $q = Doctrine_Query::create()
      ->from('Page p')
      ->leftJoin('p.PageCategory pc')
      ->where('pc.category_id= ?', 1)
      ->orderBy('p.porder, p.id');
    return $q->execute();
  }

  static public function retrievePagesToMainSlideshow() {
    $q = Doctrine_Query::create()
      ->from('Page p')
      ->leftJoin('p.PageCategory pc')
      ->where('pc.category_id= ?', 2)
      ->orderBy('p.porder, p.id');
    return $q->execute();
  }

  static public function retrieveFooterPagers() {
    $q = Doctrine_Query::create()
      ->from('Page p')
      ->leftJoin('p.PageCategory pc')
      ->where('pc.category_id= ?', 8)
      ->orderBy('p.porder, p.id');
    return $q->execute();
  }
}