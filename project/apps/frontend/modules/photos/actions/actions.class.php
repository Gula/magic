<?php

/**
 * photos actions.
 *
 * @package    magic
 * @subpackage photos
 * @author     Damian Suarez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class photosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->mg_albums = Doctrine::getTable('MGAlbum')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MGAlbumForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MGAlbumForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($mg_album = Doctrine::getTable('MGAlbum')->find(array($request->getParameter('id'))), sprintf('Object mg_album does not exist (%s).', $request->getParameter('id')));
    $this->form = new MGAlbumForm($mg_album);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($mg_album = Doctrine::getTable('MGAlbum')->find(array($request->getParameter('id'))), sprintf('Object mg_album does not exist (%s).', $request->getParameter('id')));
    $this->form = new MGAlbumForm($mg_album);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($mg_album = Doctrine::getTable('MGAlbum')->find(array($request->getParameter('id'))), sprintf('Object mg_album does not exist (%s).', $request->getParameter('id')));
    $mg_album->delete();

    $this->redirect('photos/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $mg_album = $form->save();

      $this->redirect('photos/edit?id='.$mg_album->getId());
    }
  }
}
