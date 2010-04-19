<?php


class EventTable extends Doctrine_Table {

  public static function getInstance() {
    return Doctrine_Core::getTable('Event');
  }

  static public function retrieveEventsList() {
    $q = Doctrine_Query::create()
      ->from('Event e')
      ->leftJoin('e.EventCategory ec')
      ->where('ec.category_id = ?', 3);

    return $q->execute();
  }
}