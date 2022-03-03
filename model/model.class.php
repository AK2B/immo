<?php

/**
 * @author      Arnaud BOISJARDIN
 * @version     v.1.0.0 
 * @copyright   Copyright (c) 2021, AB
 */
require_once('database/database.php');
/**
 * fonctions utilisablent par mes entités qui extends Model
 * $table défini la table à utiliser
 */
class Model
{
    protected $pdo;
    protected $table;

    public function __construct()
    {
        $this->pdo = Database::getBdd();
    }
    // Permet de selectionner toutes les lignes l'attribut codeM de la table correspondant à l'entité qui l'utilise
    function findAll(?string $order = "")
    {
        $sql = "SELECT `codeM` FROM {$this->table} ";
        if ($order) {
            $sql .= " ORDER BY " . $order;
        }
        $resultats = $this->pdo->query($sql);
        $item = $resultats->fetchAll();
        echo "<pre>" . json_encode(array("action" => "list", "entity" => "{$this->table}", "data" => $item), JSON_PRETTY_PRINT) . "</pre>";
    }
    // Permet de selectionner un codeM spécifique de la table correspondant à l'entité qui l'utilise
    function findOne($code)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE `codeM` = :code");
        $query->bindValue(':code', $code, PDO::PARAM_STR);
        $query->execute();
        $item = $query->fetch();
        echo "<pre>" . json_encode(array("action" => "read", "entity" => "client", "data" => $item), JSON_PRETTY_PRINT) . "</pre>";
    }
}
