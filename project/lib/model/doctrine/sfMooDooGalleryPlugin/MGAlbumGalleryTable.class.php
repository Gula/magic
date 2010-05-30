<?php


class MGAlbumGalleryTable extends PluginMGAlbumGalleryTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MGAlbumGallery');
    }
}