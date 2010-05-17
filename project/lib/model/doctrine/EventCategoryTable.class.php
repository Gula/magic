<?php


class EventCategoryTable extends Doctrine_Table
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('EventCategory');
    }

    static public function ExistByEventAndCat($event_id, $cat_id) {

      $q = Doctrine_Query::create()
        ->from('EventCategory ec')
        ->where('ec.event_id = ? and ec.category_id = ?', array($event_id, $cat_id));
      $result = $q->fetchOne();

      return empty($result) ? null : $result;
    }
}