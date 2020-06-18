<?php


/*======================================

Thirrja e Kontrollerave (interaktivi me Klienta)

========================================*/
require_once "Controllers/TemplateController.php";


/*======================================

Thirrja e Modelave ( interaktivi me Databaze )

========================================*/


$Template = new TemplateController();

$Template->ViewTemplate();

?>