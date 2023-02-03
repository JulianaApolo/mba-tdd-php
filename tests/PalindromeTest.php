<?php

namespace Mba\PhpTdd\Test;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Mba\PhpTdd\Palindrome;

/**
 * @coversNothing
 */
class PalindromeTest extends TestCase
{
    public static function nonPalindromesProvider(): array
    {
        return [
            ["xyz"],
            ["elephant"],
            ["Country"],
            ["Top . post!"],
            ["Wonderful-fool"],
            ["Wild imagination!"],
        ];
    }

    public static function palindromesProvider(): array
    {
        return [
            ["Rotator"],
            ["bob"],
            ["madam"],
            ["mAlAyAlam"],
            ["1"],
            ["Able was I, ere I saw Elba"],
            ["Madam I'm Adam"],
            ["Step on no pets."],
            ["Top spot!"],
            ["02/02/2020"],
            ["Socorram-me subi ônibus em marrocos"],
        ];
    }

    #[DataProvider('palindromesProvider')]
    public function testIsPalindrome($palindromeText): void
    {
        $this->assertTrue(Palindrome::isPalindrome($palindromeText));
    }

    #[DataProvider('nonPalindromesProvider')]
    public function testIsPalindromeFalse($nonPalindromeText): void
    {
        $palindrome = new Palindrome;

        $this->assertFalse(Palindrome::isPalindrome($nonPalindromeText));
    }
}