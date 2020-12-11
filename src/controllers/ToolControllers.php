<?php

namespace MVCFinalTamLe\controllers;

class ToolControllers
{
    public static function PrettyShow($cmd, $stop = false)
    {
        echo "<br>";
        print("<pre>" . print_r($cmd, true) . "</pre>");
        echo "<br>";
        if ($stop) die();
    }

    public static function dd($var)
    {
        echo "<pre>";
        print_r($var);
        exit;
    }

    public static function textarea($var, $stop = false, $cols = 100, $rows = 30, $char = 'UTF-8')
    {
        $cols = ($cols == 0) ? 100 : $cols;
        $rows = ($rows == 0) ? 30 : $rows;
        if ($char === false) $char = 'ISO-8859-1';
        echo "\n<br /><textarea cols='$cols' rows='$rows' readonly='readonly'>";
        if (is_array($var)) $text = htmlspecialchars(print_r($var, true), ENT_QUOTES, $char);
        else $text = htmlspecialchars($var, ENT_QUOTES, $char);
        if (empty($text) && !empty($var)) { // Fix "empty?" textarea bug
            $char = ($char == 'ISO-8859-1') ? '' : 'ISO-8859-1';
            if (is_array($var)) $text = htmlspecialchars(print_r($var, true), ENT_QUOTES, $char);
            else $text = htmlspecialchars($var, ENT_QUOTES, $char);
        }
        echo "$text</textarea><br />\n";
        if ($stop) exit;
    }

    public static function cut_str($str, $left, $right)
    {
        $str = substr(stristr($str, $left), strlen($left));
        $leftLen = strlen(stristr($str, $right));
        $leftLen = $leftLen ? -($leftLen) : strlen($str);
        $str = substr($str, 0, $leftLen);
        return $str;
    }
}