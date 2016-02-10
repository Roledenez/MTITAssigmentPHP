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
$db->insertElement("RadioButton",\app\Element::radioButton("Radiobtn",array
(0 => 'radio 1')),0);
$db->insertElement("CheckBox",\app\Element::checkBox("Check",array(0 =>
    'check 1',1 => 'check 2')),0);
$db->insertElement("Dropdown",\app\Element::dropdownList("Drop",array(0 =>
    'op 1',1 => 'op 2',2 => 'op 3')),0);
