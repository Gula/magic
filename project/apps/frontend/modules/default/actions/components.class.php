<?php

class defaultComponents extends sfComponents
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeHeader(sfWebRequest $request)
  {
    $this->optionesMenu = PageTable::retrievePagesToMainMenu();
  }

  public function executeSlideshow(sfWebRequest $request)
  {
    $this->pages = PageTable::retrievePagesToMainSlideshow();
  }
}