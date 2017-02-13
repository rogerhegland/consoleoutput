<?php

namespace Consoleoutput;

class Consoleoutput
{
    private $foregroundColors = [
        'black'        => '0;30',
        'dark_gray'    => '1;30',
        'blue'         => '0;34',
        'light_blue'   => '1;34',
        'green'        => '0;32',
        'light_green'  => '1;32',
        'cyan'         => '0;36',
        'light_cyan'   => '1;36',
        'red'          => '0;31',
        'light_red'    => '1;31',
        'purple'       => '0;35',
        'light_purple' => '1;35',
        'brown'        => '0;33',
        'yellow'       => '1;33',
        'light_gray'   => '0;37',
        'white'        => '1;37'
    ];

    private $backgroundColors = [
        'b_black'      => '40',
        'b_red'        => '41',
        'b_green'      => '42',
        'b_yellow'     => '43',
        'b_blue'       => '44',
        'b_magenta'    => '45',
        'b_cyan'       => '46',
        'b_light_gray' => '47'
    ];

    /**
     * Print (coloured) text without a new line and without the time
     *
     * @param string $text
     */
    public static function write($text)
    {
        self::writeColouredText($text, false, false);
    }

    /**
     * Print (coloured) text with a new line and without the time
     *
     * @param string $text
     */
    public static function writeLn($text)
    {
        self::writeColouredText($text, true, false);
    }

    /**
     * Print (coloured) text with the time and without a new line
     *
     * @param string $text
     */
    public static function writeT($text)
    {
        self::writeColouredText($text, false, true);
    }

    /**
     * Print (coloured) text with a new line and with the time
     *
     * @param string $text
     */
    public static function WriteLnT($text)
    {
        self::writeColouredText($text, true, true);
    }

    private static function writeColouredText($text = '', $newLine, $printTime)
    {
        $textcolor = new self;
        $foregroundColors = $textcolor->foregroundColors;
        foreach ($foregroundColors as $colorName => $colorCode) {
            $text = str_replace("<{$colorName}>", "\033[{$colorCode}m", $text);
            $text = str_replace("</{$colorName}>", "\033[0m", $text);
        }

        $allBackgroundColors = $textcolor->backgroundColors;
        foreach ($allBackgroundColors as $colorName => $colorCode) {
            $text = str_replace("<{$colorName}>", "\033[{$colorCode}m", $text);
            $text = str_replace("</{$colorName}>", "\033[0m", $text);
        }

        if ($printTime) {
            $text = "\033[01;34m".date('H:i:s')."\033[0m"."   $text";
        }
        if ($newLine) {
            $text .= "\n";
        }

        print "$text";
    }
}