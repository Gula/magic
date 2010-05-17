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
    $id = $request->getParameter('id');
    //die('id: '.$id);

    //$ev = $this->event = new Event();
    
    
    $this->form = $this->configuration->getForm();
    $this->event = $this->form->getObject();
  }
}
