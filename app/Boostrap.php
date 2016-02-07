<?php
/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/7/2016
 * Time: 4:21 PM
 */

namespace app;


class Boostrap
{
    private $openDiv = "";
    private $closeDiv = "</div>";

    static function openDiv($attribute){
        $div = "<div ";
        foreach ($attribute as $key => $value){
            $div .= $key."=".$value." ";
        }
        echo $div." >";
    }

    static function closeDiv(){
        echo "</div>";
    }

    static function openForm($name,$attribute){
        $form = '<form ';
        foreach ($attribute as $key => $value){
            $form .= $key."=".$value." ";
        }
        $form .= ' >';
        $form .= '<fieldset>';
        $form .= '<legend>'.$name.'</legend>';
        return $form;

    }

    static  function closeForm(){
        $form = '';
        $form .= ' </fieldset>';
        $form .= ' </form>';
        return $form;
    }
}