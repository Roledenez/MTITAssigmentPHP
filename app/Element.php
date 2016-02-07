<?php
/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/7/2016
 * Time: 2:24 PM
 */

namespace app;


class Element
{

    static function text($data = array(
                                    'label' => 'hello label',
                                    'placeholder'=> 'hello holder',
                                    'help' => 'your help goes here',
                                    'require' => false),$button = true,$delete=true){

        $text = '';
        $text .= '<div class="form-group">';
        $text .= '<label class="col-md-4 control-label" for="textinput">{text}</label>';
        $text .= '<div class="col-md-4">';
        $text .= '<input id="textinput" name="textinput" type="text" placeholder="'.$data["placeholder"].'" class="form-control input-md">';
//        $text .= '<span class="help-block">'.$data["help"].'</span>';
        $text .= '</div>';
        $text .= $button ? '{button}' : '';//$button ? Element::buttonLink($delete ? "Delete" : "Add",$delete ? "delete.php" : "add.php") : '';
        $text .= '</div>';
        return $text;
    }

    static function button($name){
        $button = '';
        $button .= '<div class="form-group">';
//        $button .= '<label class="col-md-4 control-label" for="singlebutton">Single Button</label>';
        $button .= '<div class="col-md-4">';
        $button .= '<button id="singlebutton" name="singlebutton" class="btn btn-primary">'.$name.'</button>';
        $button .= '</div>';
        $button .= '</div>';
        return $button;
    }

    static function buttonLink($name,$link){
        $button = '';
        $button .= '<div class="form-group">';
//        $button .= '<label class="col-md-4 control-label" for="singlebutton">Single Button</label>';
        $button .= '<div class="col-md-4">';
        $button .= '<a href="'.$link.'" class="btn btn-primary">'.$name.'</a>';
        $button .= '</div>';
        $button .= '</div>';
        return $button;
    }

}