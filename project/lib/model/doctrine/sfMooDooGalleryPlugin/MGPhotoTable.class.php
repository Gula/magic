<?php


class MGPhotoTable extends PluginMGPhotoTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MGPhoto');
    }
}