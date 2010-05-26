<?php

class backendConfiguration extends sfApplicationConfiguration
{
  public function configure()
  {
    
  }
public function getTemplateDirs($moduleName)
{
$dirs = parent::getTemplateDirs($moduleName);
array_unshift($dirs,sfConfig::get('sf_plugins_dir').'/sfDoctrineMooDooPlugin/apps/'.$this->getApplication().'/modules/'.$moduleName.'/templates');
return $dirs;
}
}

