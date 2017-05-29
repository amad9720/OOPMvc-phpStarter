<?php


class Annonce extends Db_object
{
    public $id;
    public $titre;
    public $texte;
    public $date;
    public $idUtilisateur;

    protected static $db_table = "annonce";
    protected static $db_table_fields = array("titre","texte","date","idUtilisateur");

    function __construct()
    {

    }



}