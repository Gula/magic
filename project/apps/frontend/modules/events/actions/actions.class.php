<?php

/**
 * events actions.
 *
 * @package    sf_sandbox
 * @subpackage events
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class eventsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->event = Doctrine::getTable('Event')->find($request->getParameter('id'));
    $this->page = Doctrine::getTable('Page')->find(4);
  }
}
