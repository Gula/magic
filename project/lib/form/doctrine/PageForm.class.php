<?php

/**
 * Page form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PageForm extends BasePageForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);

    $this->widgetSchema->setLabels(array(
      'parent_id'=> 'Parent page'
    ));

    $this->widgetSchema['description'] = new sfWidgetFormTextareaTinyMCE(array(
      'width' => 500,
      'height' => 250,
      'config' => 'theme : "simple", theme_advanced_disable: "anchor,image,cleanup,help, charmap, visualaid, removeformat, code, styleselect"'
    ));
  }
}
