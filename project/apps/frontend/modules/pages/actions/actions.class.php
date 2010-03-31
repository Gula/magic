<?php

/**
 * pages actions.
 *
 * @package    sf_sandbox
 * @subpackage pages
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pagesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->page = Doctrine::getTable('Page')->find($request->getParameter('id'));
  }
}
