<?php

require_once dirname(__FILE__).'/../lib/eventsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/eventsGeneratorHelper.class.php';

/**
 * events actions.
 *
 * @package    sf_sandbox
 * @subpackage events
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventsActions extends autoEventsActions {
  public function executeNew(sfWebRequest $request) {
    // el id que viene es el de la categoria a la cual pertenece el evento
    $ev = $this->event = new Event();
    $ev->setCatId($request->getParameter('id'));
    $this->form = new EventAdminForm($ev);
  }

  public function executeCreate(sfWebRequest $request) {
    $params = $request->getParameter('event');

    $ev = $this->event = new Event();
    $ev->setCatId($params['event_cat']);
    $this->form = new EventAdminForm($ev);

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request) {
    $ev = $this->event = $this->getRoute()->getObject();

    $cats = $this->event->getCategories();
    $isMainSlide = false;
    foreach ($cats as $cat)
      if($cat->get('id')==2) $isMainSlide = true;

    if ($isMainSlide) $ev->setIsMainSlide(true);

    $this->form = $this->configuration->getForm($this->event);
    //$this->form = new EventForm($this->event);

  }

  protected function processForm(sfWebRequest $request, sfForm $form) {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid()) {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      try {
        $event = $form->save();
      } catch (Doctrine_Validator_Exception $e) {

        $errorStack = $form->getObject()->getErrorStack();

        $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ?  's' : null) . " with validation errors: ";
        foreach ($errorStack as $field => $errors) {
          $message .= "$field (" . implode(", ", $errors) . "), ";
        }
        $message = trim($message, ', ');

        $this->getUser()->setFlash('error', $message);
        return sfView::SUCCESS;
      }

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $event)));

      if ($request->hasParameter('_save_and_add')) {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@event_new');
      }
      else {
        $this->getUser()->setFlash('notice', $notice);

        $params = $request->getParameter('event');
        if(isset($params['main_slideshow'])) {
          $objEvCat = EventCategoryTable::ExistByEventAndCat($event->get('id'), 2);

          if(is_null($objEvCat)) {
            $obj = new EventCategory();
            $obj->setCategoryId(2);
            $obj->setEventId($event->get('id'));
            $obj->save();
          }
        }
        else {
          $objEvCat = EventCategoryTable::ExistByEventAndCat($event->get('id'), 2);
          if(!is_null($objEvCat)) $objEvCat->delete();
        }

        if($params['event_cat'] !=  '') {
          $obj = new EventCategory();
          $obj->setCategoryId($params['event_cat']);
          $obj->setEventId($event->get('id'));
          $obj->save();
        }
        $this->redirect('events/index');
      }
    }
    else {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

}
