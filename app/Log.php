<?php
/**
 * Created by IntelliJ IDEA.
 * User: Roledene
 * Date: 2/7/2016
 * Time: 3:38 PM
 */

namespace app;


class Log
{

    static function info($string){
        $myfile = fopen("log.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $string);
        fclose($myfile);
    }

    static function writeFile($name,$content){


//            echo $content;
        $myfile = fopen('storage/'.$name.'.txt', "w") or die("Unable to open file!");
        fwrite($myfile, $content);
        fclose($myfile);
        header("Location: " . 'storage/'.$name.'.txt');
    }

}