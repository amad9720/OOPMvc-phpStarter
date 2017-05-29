<?php


class Classement extends Db_object
{
    public $id;
    public $idAnnonce;
    public $idCategorie;

    protected static $db_table = "classement";
    protected static $db_table_fields = array("idAnnonce","idCategorie");

    function __construct()
    {

    }

}