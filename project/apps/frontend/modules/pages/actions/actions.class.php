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
    $this->level = $request->getParameter('level');

    // paginas hijas
    if($this->level == 1) {
      // VIP
      if($request->getParameter('id') == 21) {
        $user = $this->getUser();

        if ($user->isAuthenticated())
        {
          $this->isVip = $user->getGuardUser()->hasPermission('Vip');
          //return $this->redirect('pages/index?id=21&level=1');
        }

        $class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfMooDooFormSignin');
        $this->form = new $class();

        if ($request->isMethod('post'))
        {
          $this->form->bind($request->getParameter('signin'));
          if ($this->form->isValid())
          {
            $values = $this->form->getValues();
            $this->getUser()->signin($values['user'], array_key_exists('remember', $values) ? $values['remember'] : false);

            // always redirect to a URL set in app.yml
            // or to the referer
            // or to the homepage
            $signinUrl = '@vip'; //sfConfig::get('app_sf_guard_plugin_success_signin_url', $user->getReferer($request->getReferer()));

            return $this->redirect('pages/index?id=21&level=1');
          }
        }
        else
        {
          $user->setReferer($this->getContext()->getActionStack()->getSize() > 1 ? $request->getUri() : $request->getReferer());

          $module = sfConfig::get('sf_login_module');
          if ($this->getModuleName() != $module)
          {
            //return $this->redirect($module.'/'.sfConfig::get('sf_login_action'));
          }
          $this->getResponse()->setStatusCode(401);
        }
      }

      // end login in pagfe id=21

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
   public function executeVip(sfWebRequest $request)
  {
    $user = $this->getUser();
    if ($user->isAuthenticated() && $guard = $user->getGuardUser()->hasPermission('Vip'))
    {
      $this->setTemplate('shows');
      echo "sos re vip";
    }
    else{
      return $this->redirect('@sf_guard_signin');
    }
   }
}
