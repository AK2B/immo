<?php

/**
 * @author      Arnaud BOISJARDIN
 * @version     v.1.0.0 
 * @copyright   Copyright (c) 2021, AB
 */
require_once('model/model.class.php');
/**
 * Toutes les fonctions servant à l'exploitation de cette classe sont héritées de la classe Model
 * La variable $table identifie et paramétre les fonctions héritées de la classe model
 */
class Client extends Model
{
    protected $table = "client";
}
