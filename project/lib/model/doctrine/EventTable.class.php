<?php


class EventTable extends Doctrine_Table {

  public static function getInstance() {
    return Doctrine_Core::getTable('Event');
  }

  static public function retrieveEventsList() {
    $cats = Doctrine_Query::create()
      ->from('Category c')
      //->where('c.id = ? or c.parent_id = ?', array(3, 3))
      ->where('c.id = ?', 2)
      ->fetchArray();

    $cats_id = array();
    foreach ($cats as $cat) {
      array_push($cats_id, $cat['id']);
    }

    $q = Doctrine_Query::create()
      ->from('Event e')
      ->leftJoin('e.EventCategory ec')
      ->whereIn('ec.category_id', $cats_id);
    return $q->execute();
  }

  static public function retrieveBetterShow() {
    $q = Doctrine_Query::create()
      ->from ('Event e')
      ->orderBy('e.date Desc');

    return $q->fetchOne();
  }
}