<?php
use app\Boostrap;
use app\Database;
use app\Element;

include('app/Database.php');
include('app/Element.php');
include('app/Boostrap.php');
include('app/Log.php');
//use app\Database;
//use app\Element;
/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/7/2016
 * Time: 2:17 PM
 */

$html = '';
$buffer = '';
$pageId = '';
$pageName = '';
$code = '';
$isBoostrap = false;

include("includes/header.php");

$db = new Database();
//$db->insert();
//$db->insertElement("textBox",mysqli_real_escape_string(Database::$connection,Element::text()),0);

$result = $db->getLastPage();

while($row = $result->fetch_assoc()) {
    $pageId = $row["id"];
    $pageName = $row["name"];
    $code = str_replace('{button}','<a href="delete.php?pageId='.$pageId.'&elementId='.$row["id"].'" class="btn btn-primary">Delete</a>',$row["code"]).'<br />';
}

$attribute = array(
    'class' => $isBoostrap ? 'row' : ''
);

Boostrap::openDiv($attribute);


    //side bar
    $attribute = array(
        'class' => $isBoostrap ? 'col-xs-3 col-md-3' : '',
        'style' => 'background: red; height: 20px;'
    );
//    var_dump($attribute);
    Boostrap::openDiv($attribute); // column open
    echo "<h1>Forms</h1>";

    echo Element::buttonLink("New Form","tools.php");
    Boostrap::closeDiv(); // column end

    $attribute = array(
        'class' => $isBoostrap ? 'col-xs-9 col-md-9' : '',
        'style' => 'background: blue; height: 20px;'
    );


    //body
    Boostrap::openDiv($attribute); // column open

    /////////////////////////////////////
    $attribute = array(
        'class' => $isBoostrap ? 'form-horizontal' : '',
        'action' => 'test.php'
    );
    $buffer .= Boostrap::openForm($pageName,$attribute);
    echo Boostrap::openForm($pageName,$attribute);
//    echo $db->getLastPage();
    $buffer .= $code;
    echo $code;
    $buffer .= Boostrap::closeForm();

    echo Element::buttonLink("download Code","index.php?download=true");
    echo Boostrap::closeForm();
    /////////////////////////////////

    if( isset($_GET['download']) && $_GET['download'] == true){
    \app\Log::writeFile($pageName,$buffer);
    }


    /////////////////////////////////

    $attribute = array(
        'class' => $isBoostrap ? 'form-horizontal' : '',
        'action' => 'addPage.php',
        'id' => 'name'
    );
    echo Boostrap::openForm("Create a new form",$attribute);
    echo str_replace('{text}','Form Name',Element::text(array('label'=>'Form Name','placeholder'=>'','help'=>''),false));
    echo Element::button("New");
    echo Boostrap::closeForm();

    //////////////////////////////

        // open form
        $attribute = array(
            'class' => $isBoostrap ? 'form-horizontal' : '',
            'action' => 'test.php'
        );

        echo Boostrap::openForm("Add elements to form",$attribute); // open form

//echo str_replace("world","Peter","Hello world!");
//            $result = $db->getAllElements();
//            while($row = $result->fetch_assoc()) {
//
//               echo str_replace('{button}','<a href="add.php?pageId='.$pageId.'&elementId='.$row["id"].'" class="btn btn-primary">Add</a>',$row["code"]).'<br />';
////                echo str_replace('{text}','??///////////////////////',$row["code"])."<br>";
////                echo '<a href="add.php?id='.$row["id"].'" class="btn btn-primary">Add</a>';
//            }
//            echo $html;
//        echo Element::button("submit");
//        echo Element::buttonLink("submit","test.html?id=");

        // make the form body here
        /////////////////////////////////////////////////

        echo Element::radio_Button('radio group',array(0 => 'radio 1', 1 => 'radio 2'));

        ////////////////////////////////////////
        Boostrap::closeForm(); // end form
    Boostrap::closeDiv(); //column end

Boostrap::closeDiv(); // row end


include("includes/footer.php");



