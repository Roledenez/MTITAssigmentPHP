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
                                    'require' => false),$name='textinput',$button = true,$delete=true){

        $text = '';
        $text .= '<div class="';
        $text .= Element::$isBoostrap ? ' form-group ' : ' ';
        $text .= '">';
        $text .= '<label class="';
        $text .= Element::$isBoostrap ? ' col-md-4 control-label"' : ' "';
        $text .= ' '.'for="textinput">'.$data["label"].'</label>';
        $text .= '<div class="';
        $text .= Element::$isBoostrap ? 'col-md-4' : ' ';
        $text .= '">';
        $text .= '<input id="textinput" name="'.$name.'" type="text" placeholder="'.$data["placeholder"].'" class="';
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
        $button .= '<div class="';
        $button .= Element::$isBoostrap ? 'col-md-4"' : ' ';
        $button .= '">';
        $button .= '<a href="'.$link.'"';
        $button .= Element::$isBoostrap ? ' class="btn btn-primary' : ' ';
        $button .= '">'.$name.'</a>';
        $button .= '</div>';
        $button .= '</div>';
        return $button;
    }


    //create new elements hre
    //like
    static function radioButton($name,$option){

        $radio = '';
        $radio .= '<div class="';
        $radio .= Element::$isBoostrap ? 'form-group' : ' ';
        $radio .= '">';
        $radio .= '<label class="';
        $radio .= Element::$isBoostrap ? 'col-md-4 control-label"' : ' "';
        $radio .= ' '.'for="radios">'.$name.'</label>';
        $radio .= '<div class="';
        $radio .= Element::$isBoostrap ? 'col-md-4"' : ' ';
        $radio .= '">';

        $count = '';
        foreach($option as $key => $value) {
            $radio .= '<div class="';
            $radio .= Element::$isBoostrap ? 'radio' : ' ';
            $radio .= '">';
            $radio .= '<label for="radios-'.$count++.'">';
            $radio .= '<input type="radio" name="radios" id="radios-'.$count++.'" value="'. (1 + $count++) .'" checked="checked">'.$value.'</label>';
            $radio .= '</div>';
        }

        $radio .= '</div>';
        $radio .= '</div>';
        return $radio;
    }


    static function checkBox($name,$option){

        $check = '';
        $check .= '<div class="';
        $check .= Element::$isBoostrap ? 'form-group' : ' ';
        $check .= '">';
        $check .= '<label class="';
        $check .= Element::$isBoostrap ? 'col-md-4
        control-label"' : ' "';
        $check .= ' '.'for="checkboxes">' .$name.'</label>';
        $check .= '<div class="';
        $check .= Element::$isBoostrap ? 'col-md-4' : ' ';
        $check .= '">';

        $count = '';
        foreach($option as $key => $value){
            $check .= '<div class="';
            $check .= Element::$isBoostrap ? 'checkbox' : ' ';
            $check .= '">';
            $check .= '<label for="checkboxes-'.$count++.'">';
            $check .= '<input type="checkbox" name="checkboxes"
            id="checkboxes-'.$count++.'" value="'. (1 + $count++) .'">'.$value.'</label>';
            $check .= '</div>';
        }

        $check .= '</div>';
        $check .= '</div>';
        return $check;
    }


    static function dropdownList($name,$option){

        $drop = '';
        $drop .= '<div class="';
        $drop .= Element::$isBoostrap ? 'form-group' : ' ';
        $drop .= '">';
        $drop .= '<label class="';
        $drop .= Element::$isBoostrap ? 'col-md-4 control-label"' : ' "';
        $drop .= ' '.'for="selectbasic">' .$name.'</label>';
        $drop .= '<div class="';
        $drop .= Element::$isBoostrap ? 'col-md-4' : ' ';
        $drop .= '">';
        $drop .= '<select id="selectbasic" name="selectbasic" class="';
        $drop .= Element::$isBoostrap ? 'form-control' : ' ';
        $drop .= '">';
        $count ='';
//        die(print_r($option));
        foreach($option as $key => $value){

            $drop .= '<option value="'.$key.'">'.$value.'</option>';

        }
        $drop .= '</select>';
        $drop .= '</div>';
        $drop .= '</div>';
        return $drop;
    }
}