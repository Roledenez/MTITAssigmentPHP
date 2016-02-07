<?php
/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/7/2016
 * Time: 9:44 PM
 */

use app\Boostrap;
use app\Database;
use app\Element;

include('app/Database.php');
include('app/Element.php');
include('app\Boostrap.php');

include("includes/header.php");

$db = new Database();
//$db->insert();
//$db->insertElement("textBox",mysqli_real_escape_string(Database::$connection,Element::text()),0);

$attribute = array(
    'class' => 'row'
);

Boostrap::openDiv($attribute);

    //side bar
    $attribute = array(
        'class' => 'col-xs-3 col-md-3',
        'style' => 'background: red; height: 20px;'
    );
//    var_dump($attribute);
    Boostrap::openDiv($attribute); // column open
    echo "<h1>Forms</h1>";
    Boostrap::closeDiv(); // column end

    $attribute = array(
        'class' => 'col-xs-9 col-md-9',
        'style' => 'background: blue; height: 20px;'
    );


    //body
    Boostrap::openDiv($attribute); // column open
        // open form
        $attribute = array(
            'class' => 'form-horizontal',
            'action' => 'test.php'
        );
        Boostrap::openForm("Form Builder",$attribute);

            $result = $db->getAllElements();
            while($row = $result->fetch_assoc()) {
                echo  $row["code"]. "<br>";
            }
//        echo Element::button("submit");
//        echo Element::buttonLink("submit","test.html");
        Boostrap::closeForm();
    Boostrap::closeDiv(); //column end

Boostrap::closeDiv(); // row end


include("includes/footer.php");



