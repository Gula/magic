<?php


class MGCategoryTable extends PluginMGCategoryTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MGCategory');
    }
}