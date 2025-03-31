<?php

class StringUtility {
    public static function shout($string) {
        return strtoupper($string) . '!';
    }

    public static function whisper($string) {
        return strtolower($string) . '.';
    }

    public static function repeat($string, $times = 2) {
        return str_repeat($string, $times);
    }
}

echo StringUtility::shout('I love Docker') . '<br>';
echo StringUtility::whisper('PHP is actually GOOD') . '<br>';
echo StringUtility::repeat('Banana', 5) . '<br>';