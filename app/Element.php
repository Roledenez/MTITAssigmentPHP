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

    static $isBoostrap = false;
    static function text($data = array(
                                    'label' => 'hello label',
                                    'placeholder'=> 'hello holder',
                                    'help' => 'your help goes here',
                                    'require' => false),$button = true,$delete=true){

        $text = '';
        $text .= '<div class="';
        $text .= Element::$isBoostrap ? ' form-group ' : ' ';
        $text .= '">';
        $text .= '<label class="';
        $text .= Element::$isBoostrap ? ' col-md-4 control-label"' : ' "';
        $text .= ' '.'for="textinput">{text}</label>';
        $text .= '<div class="';
        $text .= Element::$isBoostrap ? 'col-md-4' : ' ';
        $text .= '">';
        $text .= '<input id="textinput" name="textinput" type="text" placeholder="'.$data["placeholder"].'" class="';
        $text .= Element::$isBoostrap ? 'form-control input-md': ' ';
        $text .= '">';
//        $text .= '<span class="help-block">'.$data["help"].'</span>';
        $text .= '</div>';
        $text .= $button ? '{button}' : '';//$button ? Element::buttonLink($delete ? "Delete" : "Add",$delete ? "delete.php" : "add.php") : '';
        $text .= '</div>';
        return $text;
    }

    static function button($name){
        $button = '';
        $button .= '<div class="';
        $button .= Element::$isBoostrap ? 'form-group' : ' ';
        $button .= '">';
//        $button .= '<label class="col-md-4 control-label" for="singlebutton">Single Button</label>';
        $button .= '<div class="';
        $button .= Element::$isBoostrap ? ' col-md-4' : ' ';
        $button .= '">';
        $button .= '<button id="singlebutton" name="singlebutton" class="';
        $button .= Element::$isBoostrap ? 'btn btn-primary' : ' ';
        $button .= '">'.$name.'</button>';
        $button .= '</div>';
        $button .= '</div>';
        return $button;
    }

    static function buttonLink($name,$link){
        $button = '';
        $button .= '<div class="';
        $button .= Element::$isBoostrap ? 'form-group' :  ' ';
        $button .= '">';
//        $button .= '<label class="col-md-4 control-label" for="singlebutton">Single Button</label>';
        $button .= '<div class="col-md-4">';
        $button .= '<a href="'.$link.'"';
        $button .= Element::$isBoostrap ? ' class="btn btn-primary' : ' ';
        $button .= '">'.$name.'</a>';
        $button .= '</div>';
        $button .= '</div>';
        return $button;
    }


    //create new elements hre
    //like
    static function radio_Button($name,$option){

        $radio = '';
        $radio .= '<div class="form-group">';
        $radio .= '<label class="col-md-4 control-label" for="radios">'.$name.'</label>';
        $radio .= '<div class="col-md-4">';

        $count = '';
        foreach($option as $key => $value) {
            $radio .= '<div class="radio">';
            $radio .= '<label for="radios-'.$count++.'">';
            $radio .= '<input type="radio" name="radios" id="radios-'.$count++.'" value="'. (1 + $count++) .'" checked="checked">'.$value.'</label>';
            $radio .= '</div>';
        }

        $radio .= '</div>';
        $radio .= '</div>';
        return $radio;
    }


    static function check_box($name,$option){

        $check = '';
        $check .= '<div class="form-group">';
        $check .= '<label class="col-md-4 control-label"for="checkboxes">'.$name.'</label>';
        $check .= '<div class="col-md-4">';

        $count = '';
        foreach($option as $key => $value){
            $check .= '<div class="checkbox">';
            $check .= '<label for="checkboxes-'.$count++.'">';
            $check .= '<input type="checkbox" name="checkboxes"
            id="checkboxes-'.$count++.'" value="'. (1 + $count++) .'">'.$value.'</label>';
            $check .= '</div>';
        }

        $check .= '</div>';
        $check .= '</div>';
        return $check;
    }

}