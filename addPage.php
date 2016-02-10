<?php
include('app/Database.php');
include('app/Element.php');

/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/7/2016
 * Time: 11:10 PM
 */

$db =new \app\Database();
//die("die");
$db->insertPage($_GET['textinput']);

header("Location: " . "index.php");