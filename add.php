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

//$db->insertElement("textBox",\app\Element::text(array(
//    'label' => 'Tex Box',
//    'placeholder'=> 'text',
//    'help' => 'help',
//    'require' => false),true,false),0);
//
//$db->insertElement("button",\app\Element::button("Button"),0);
//$db->insertElement("link",\app\Element::buttonLink("Button","add.php"),0);

$db->insertToPage($_GET['pageId'],$_GET['elementId']);

header("Location: " . "index.php");

