<?php
/**
 * Created by PhpStorm.
 * User: marga
 * Date: 13/12/2017
 * Time: 16:44
 */

try {
    $bdd = new PDO('mysql:host=localhost; dbname=bdd_nanau_purple; charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur: '.$e->getMessage());
}

session_start();


?>
