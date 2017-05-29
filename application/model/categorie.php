<?php


class Categorie extends Db_object
{
    public $id;
    public $nom;
    public $description;

    protected static $db_table = "categorie";
    protected static $db_table_fields = array("nom","description");

    function __construct()
    {

    }

}