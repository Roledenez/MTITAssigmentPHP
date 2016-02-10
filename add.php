<?php
include('app/Database.php');
include('app/Element.php');
/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/7/2016
 * Time: 9:32 PM
 */

$db =new \app\Database();



$db->insertToPage($_GET['pageId'],$_GET['elementId']);

header("Location: " . "index.php");

