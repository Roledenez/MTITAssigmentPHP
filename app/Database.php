<?php
/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/7/2016
 * Time: 2:25 PM
 */

namespace app;

use Mysqli;

class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $databaseName = "mtit_db";

    public static $connection = null;

    function __construct()
    {
        Database::$connection = new mysqli($this->servername, $this->username, $this->password,$this->databaseName);
        if(Database::$connection->connect_error){
            die("Connection failed: " . Database::$connection->connect_error);
        }
    }

    function insert(){
        $sql = "INSERT INTO elements ( label, code) VALUES ( 'from db class', 'form static method');";
        if (Database::$connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . Database::$connection->error;
        }
    }

    function insertElement($name,$code,$pageNumber){
        $sql = "INSERT INTO elements ( label, code,page_number) VALUES ( '$name', '$code',$pageNumber);";

        if (Database::$connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . Database::$connection->error;
        }
    }

    function deleteAllElements(){
        $sql = "DELETE FROM elements ";
        if (Database::$connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . Database::$connection->error;
        }
    }

    function getAllElements(){
        $sql = "SELECT * FROM elements";
        $result = Database::$connection->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        } else {
           die("error getting elements");
        }
    }



    function getLastPage(){
        $sql = "SELECT * FROM pages ORDER BY id DESC LIMIT 1";
        $result = Database::$connection->query($sql);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            die("error getting elements");
        }
    }

    function insertPage($name){
        $sql = "INSERT INTO pages ( name, code) VALUES ( '$name', '');";

        if (Database::$connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . Database::$connection->error;
        }
    }

    function getElementById($id){
        $sql = "SELECT * FROM elements where id=".$id;
        $result = Database::$connection->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            die("error getting elements");
        }
    }

    function getPageById($id){

        $sql = "SELECT * FROM pages where id=".$id;
        $result = Database::$connection->query($sql);
//        die($id);
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            die("error getting elements");
        }
    }

    function insertToPage($pageId,$elementId,$name,$link='#',$options){
//        $sql = "INSERT INTO pages ( name, code) VALUES ( '$pageId', '$elementId');";
//        $element = $this->getElementById($elementId);
//        var_dump($elementId);
        $element = $this->getElement($elementId,$name,$link,$this->convertOptionsToArray($options));
//        var_dump($options);
        $page = $this->getPageById($pageId);
        $code = $page["code"].$element;
        $sql = "UPDATE pages SET code='".$code."' WHERE id=".$pageId;
        if (Database::$connection->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . Database::$connection->error;
        }
    }

    function convertOptionsToArray($options){
        if($options != '') {
            return explode(',', $options);
        }
    }

    function getElement($id,$name,$link,$options){
        $element = '';
        switch($id){
            case 105 : return Element::text(array('label'=>$name,'placeholder'=>''));
            case 106 : return Element::button($name);
            case 107 : return Element::buttonLink($name,$link);
            case 108 : return Element::radioButton($name,$options);
            case 109 : return Element::checkBox($name,$options);
            case 110 : return Element::dropdownList($name,$options);
        }
    }


}