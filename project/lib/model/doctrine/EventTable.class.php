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
      ->whereIn('ec.category_id', $cats_id)
      ->orderBy('e.date Asc');
    return $q->execute();
  }

  static public function retrieveShowList() {
    $cats = Doctrine_Query::create()
      ->from('Category c')
      //->where('c.id = ? or c.parent_id = ?', array(3, 3))
      ->where('c.parent_id = ?', 3)
      ->fetchArray();

    $cats_id = array();
    foreach ($cats as $cat) {
      array_push($cats_id, $cat['id']);
    }

    $q = Doctrine_Query::create()
      ->from('Event e')
      ->leftJoin('e.EventCategory ec')
      ->whereIn('ec.category_id', $cats_id)
      ->andWhere('e.due_date >= ?', date('y-m-d h:i'))
      ->andWhere('e.publication_date < ?', date('y-m-d h:i'))
      ->orderBy('e.sticky Asc, e.date Asc');
    return $q->execute();
  }

  static public function retrieveBetterShow() {
    $q = Doctrine_Query::create()
      ->from ('Event e')
      ->orderBy('e.sticky Asc');
    return $q->fetchOne();
  }

  static public function retrieveMainShow($cat_id = null) {
    $q = Doctrine_Query::create()
      ->from ('Event e')
      ->leftJoin('e.EventCategory ec')
      ->andWhere('e.due_date >= ?', date('y-m-d h:i'))
      ->andWhere('e.publication_date < ?', date('y-m-d h:i'))
      ->orderBy('sticky Asc, e.date Desc');

    if(is_null($cat_id)) {
      $q->whereIn('ec.category_id', array(4, 5, 6, 7));
    }
    else {
      $q->where('ec.category_id = ?', $cat_id);
    }

    $result = $q->fetchOne();

    return empty($result) ? null : $result;
  }

  static public function retrieveShows($cat_id = null) {
    $q = Doctrine_Query::create()
      ->select('c.id, c.title')
      ->from ('Category c')
      ->leftJoin('c.EventCategory ev')
      ->groupBy('ev.category_id');
      //->orderBy('sticky Asc, e.date Desc');

    if(is_null($cat_id)) {
      $q->where('c.parent_id = ?', 3);
    }
    else {
      $q->where('c.id = ?', $cat_id);
    }


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
