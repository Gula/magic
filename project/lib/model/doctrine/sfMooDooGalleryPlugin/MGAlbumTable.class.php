<?php


class MGAlbumTable extends PluginMGAlbumTable
{
    
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MGAlbum');
    }
}