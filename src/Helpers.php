<?php

namespace Mba\PhpTdd;

class Helpers
{
    public static function removeAccentsAndSpecialChars( $str )
    {
        $str = strtolower(trim($str));
        $str = preg_replace("/[ \s\t\?\!\.\,\'\+\-\;\'\\\\\/_]+/", "", $str);
        $str = preg_replace("/[^0-9a-z-]/", "", $str);
        return strtr($str, "áéíóúâêîôûàèìòùäëïöüãõñçÁÉÍÓÚÂÊÎÔÛÀÈÌÒÙÄËÏÖÜÃÕÑÇ", "aeiouaeiouaeiouaeiouaoncAEIOUAEIOUAEIOUAEIOUAONC");
    }
}