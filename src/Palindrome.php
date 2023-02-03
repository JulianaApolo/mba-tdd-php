<?php

namespace Mba\PhpTdd;

use Mba\PhpTdd\Helpers;

class Palindrome
{
    public static function isPalindrome(string $word): bool
    {
        return Helpers::removeAccentsAndSpecialChars($word) === strrev(Helpers::removeAccentsAndSpecialChars($word));
    } 
}