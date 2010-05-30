<?php


class MGGalleryTable extends PluginMGGalleryTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MGGallery');
    }
}