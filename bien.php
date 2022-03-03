<?php ob_start() ?>
<?php
/**
 * @author      Arnaud BOISJARDIN
 * @version     v.1.0.0 
 * @copyright   Copyright (c) 2021, AB
 */
require_once('entity/bien.class.php');

$BienModel = new Bien();
/**
 * Utilisation des paramettres passés dans l'url 
 * Exception en cas d'echec. 
 */
try {
    if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'read':
                $code = isset($_GET['code']) ? $_GET['code'] : "";
                $bien = $BienModel->findOne($code);
                break;
            case 'list':
                $biens = $BienModel->findAll();
                break;
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
<?php
$content = ob_get_clean();
$title = "Nos biens";
require "views/template.php";
?>