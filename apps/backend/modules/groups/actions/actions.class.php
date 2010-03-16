<?php

/**
 * groups actions.
 *
 * @package    sf_sandbox
 * @subpackage groups
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class groupsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->sf_guard_groups = Doctrine::getTable('sfGuardGroup')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new sfGuardGroupForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfGuardGroupForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sf_guard_group = Doctrine::getTable('sfGuardGroup')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_group does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardGroupForm($sf_guard_group);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($sf_guard_group = Doctrine::getTable('sfGuardGroup')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_group does not exist (%s).', $request->getParameter('id')));
    $this->form = new sfGuardGroupForm($sf_guard_group);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sf_guard_group = Doctrine::getTable('sfGuardGroup')->find(array($request->getParameter('id'))), sprintf('Object sf_guard_group does not exist (%s).', $request->getParameter('id')));
    $sf_guard_group->delete();

    $this->redirect('groups/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sf_guard_group = $form->save();

      $this->redirect('groups/edit?id='.$sf_guard_group->getId());
    }
  }
}
