<?php
/**
 * Model Class
 * 
 * This is the example model class for quick CRUD operationd. You only need to set primary key, table name
 * 
 * Model class name  is  modHelloWorld_Model
 * Suffix mod is to identify model
 * HelloWorld is the folder name (Folder name should be lowercase)
 * Model is the filename (Filename must be lowercasea - no exceptions)
 * 
 * @author Muneeb
 * @see http://www.wordpressfuel.com/docs/mvc-models
 * @uses absModel
 */

class modHelloWorld_Model extends absModel
{
    protected $_primary_key = '[TABLE_PRIMARY_KEY_HERE]';
    protected $_table = '[TABLE_NAME_HERE]';
}
?>