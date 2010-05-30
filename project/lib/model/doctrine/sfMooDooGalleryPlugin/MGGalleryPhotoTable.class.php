<?php


class MGGalleryPhotoTable extends PluginMGGalleryPhotoTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MGGalleryPhoto');
    }
}