<?php

require_once dirname(__FILE__).'/../lib/mg_galleryGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/mg_galleryGeneratorHelper.class.php';

/**
 * mg_gallery actions.
 *
 * @package    magic
 * @subpackage mg_gallery
 * @author     Damian Suarez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mg_galleryActions extends autoMg_galleryActions
{
  public function executeListShow(sfWebRequest $request) {
    //$this->gallery = Doctrine::getTable('MGGallery')->find($request->getParameter('id'));
    //$this->setTemplate('show');
    $this->forward('mg_photo', 'index');
  }
}
