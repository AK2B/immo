<?php ob_start() ?>
<?php
/**
 * @author      Arnaud BOISJARDIN
 * @version     v.1.0.0 
 * @copyright   Copyright (c) 2021, AB
 */
require_once('entity/client.class.php');

$ClientModel = new Client();
/**
 * Utilisation des paramettres passés dans l'url 
 * Exception en cas d'echec. 
 */
try {

    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'read':
                $code = isset($_GET['code']) ? $_GET['code'] : "";
                $client = $ClientModel->findOne($code);
                break;
            case 'list':
                $client = $ClientModel->findAll();
                break;
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php
$content = ob_get_clean();
$title = "Nos clients";
require "views/template.php";
?>