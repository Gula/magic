<?php

require_once dirname(__FILE__).'/../lib/mg_photoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/mg_photoGeneratorHelper.class.php';

/**
 * mg_photo actions.
 *
 * @package    magic
 * @subpackage mg_photo
 * @author     Damian Suarez
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mg_photoActions extends autoMg_photoActions
{
  public function executeIndex(sfWebRequest $request) {
    parent::executeIndex($request);
  }
}
