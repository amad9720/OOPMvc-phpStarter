<?php


class Utilisateur extends Db_object
{
    public $id;
    public $login;
    public $password;

    protected static $db_table = "utilisateur";
    protected static $db_table_fields = array("login","password");

    function __construct()
    {

    }

}

