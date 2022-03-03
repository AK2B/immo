<?php ob_start() ?>
<?php
/**
 * @author      Arnaud BOISJARDIN
 * @version     v.1.0.0 
 * @copyright   Copyright (c) 2021, AB
 */
?>
<?php
$content = ob_get_clean();
$title = "Bienvenue";
require "views/template.php";
?>