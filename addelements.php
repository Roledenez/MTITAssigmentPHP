<?php
/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/10/2016
 * Time: 6:33 PM
 */

include('app/Database.php');
include('app/Element.php');


$db = new \app\Database();

$db->deleteAllElements();

$db->insertElement("textBox",\app\Element::text(array(
    'label' => 'Tex Box',
    'placeholder'=> 'text',
    'help' => 'help',
    'require' => false),true,false),0);

$db->insertElement("button",\app\Element::button("Button"),0);
$db->insertElement("link",\app\Element::buttonLink("Button","add.php"),0);