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
    //Asignaciones
    $this->vipNumber = 21;
    $this->level = $request->getParameter('level');
    $this->currentPage = Doctrine::getTable('Page')->find($request->getParameter('id'));
    $user = $this->getUser();

    if ($user->isAuthenticated())
      $this->isVip = $user->getGuardUser()->hasPermission('Vip');
    else
      $this->isVip = false;

    $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfMooDooFormSignin');
    $this->form = new $class();
    if($this->currentPage->getParent()->get('id') == $this->vipNumber and !($this->isVip))
      return $this->redirect('pages/index?id='.$this->vipNumber.'&level=1'); 
    else {
      // paginas hijas
      if($this->level == 1) {
        // VIP
        if($request->getParameter('id') == $this->vipNumber ) {
          if ($request->isMethod('post')) {
            $this->form->bind($request->getParameter('signin'));
            if ($this->form->isValid()) {
              $values = $this->form->getValues();
              $this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);
              return $this->redirect('pages/index?id='.$this->vipNumber.'&level=1');
            }
          } 
        }// end login in page Vip

        $this->childPage = Doctrine::getTable('Page')->find($request->getParameter('id'));
        $this->page = $this->childPage->getParent();

        // Paginas hijas de show
        if($this->childPage->getParent()->get('id') == 4) {
          $catId = $this->childPage->get('id');
          $catId = $catId - 26;
          //$catId = $catId - 16;

          /* Asignacion de mierda
          *
          * 27 = main show   -> 4
          * 28 = Belterra    -> 5
          * 29 = Rainbow     -> 6
          * 30 = Jocker      -> 7
          */

          $this->mainShow = EventTable::retrieveMainShow($catId);
          $this->shows = EventTable::retrieveShows($catId);
          $this->setTemplate('shows');
        }
      }
        else {
          $this->page = Doctrine::getTable('Page')->find($request->getParameter('id'));
          $this->childPage = false;
        }

      // pagina de show
      if($request->getParameter('id') == 4) {
        $this->mainShow = EventTable::retrieveMainShow();
        $this->shows = EventTable::retrieveShows();
        $this->setTemplate('shows');
      }
    }
  }
  public function executePermalink(sfWebRequest $request) {
//Asignaciones
    $this->vipNumber = 21;
    $this->level = $request->getParameter('level');
    $slug=$request->getParameter('slug');
    $this->currentPage = Doctrine::getTable('Page')->findOneBySlug($slug);
    //die($this->currentPage->getParent()->getId());
    $user = $this->getUser();

    if ($user->isAuthenticated())
      $this->isVip = $user->getGuardUser()->hasPermission('Vip');
    else
      $this->isVip = false;

    $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfMooDooFormSignin');
    $this->form = new $class();
    if($this->currentPage->getParent()->getId() == $this->vipNumber and !($this->isVip))
      return $this->redirect('@page_child_slug?parentslug='.$request->getParameter('parentslug').'&slug='.$request->getParameter('slug').'&level=1');
    else {
      // paginas hijas
      if($this->level == 1) {
        // VIP
        if($request->getParameter('id') == $this->vipNumber ) {
          if ($request->isMethod('post')) {
            $this->form->bind($request->getParameter('signin'));
            if ($this->form->isValid()) {
              $values = $this->form->getValues();
              $this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);
              return $this->redirect('@page_child_slug?parentslug='.$request->getParameter('parentslug').'&slug='.$request->getParameter('slug').'&level=1');
            }
          }
        }// end login in page Vip

        $this->childPage = Doctrine::getTable('Page')->findOneBySlug($slug);
        $this->page = $this->childPage->getParent();

        // Paginas hijas de show
        if($this->childPage->getParent()->get('id') == 4) {
          $catId = $this->childPage->get('id');
          $catId = $catId - 26;
          //$catId = $catId - 16;

          /* Asignacion de mierda
          *
          * 27 = main show   -> 4
          * 28 = Belterra    -> 5
          * 29 = Rainbow     -> 6
          * 30 = Jocker      -> 7
          */

          $this->mainShow = EventTable::retrieveMainShow($catId);
          $this->shows = EventTable::retrieveShows($catId);
          $this->setTemplate('shows');
        }
      }
        else {
          $this->page = Doctrine::getTable('Page')->findOneBySlug($slug);
          $this->childPage = false;
        }

      // pagina de show
      if($slug=='espectaculos') {
        $this->mainShow = EventTable::retrieveMainShow();
        $this->shows = EventTable::retrieveShows();
        $this->setTemplate('shows');
      }
    }
  }


}
