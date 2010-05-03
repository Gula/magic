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

  static public function retrieveShowList() {
    $cats = Doctrine_Query::create()
      ->from('Category c')
      ->where('c.id = ? or c.parent_id = ?', array(3, 3))
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

  static public function retrieveMainShow($cat_id = null) {
    $q = Doctrine_Query::create()
      ->from ('Event e')
      ->leftJoin('e.EventCategory ec')
      ->orderBy('sticky Asc, e.date Desc');

    if(is_null($cat_id)) {
      $q->whereIn('ec.category_id', array(4, 5, 6, 7));
    }
    else {
      $q->where('ec.category_id = ?', $cat_id);
    }

    return $q->fetchOne();
  }

  static public function retrieveShows() {
    $q = Doctrine_Query::create()
      ->select('c.id, c.title')
      ->from ('Category c')
      ->leftJoin('c.EventCategory ev')
      ->where('c.parent_id = ?', 3)
      ->groupBy('ev.category_id');
      //->orderBy('sticky Asc, e.date Desc');

    $shows= $q->fetchArray();

    for ($i = 0 ; $i < count($shows); $i++) {
      
      $q = Doctrine_Query::create()
        ->from ('Event e')
        ->leftJoin('e.EventCategory ev')
        ->where('ev.category_id = ?', $shows[$i]['id']);

      $shows[$i]['events'] = $q->execute();
    }

    return $shows;
  }
}