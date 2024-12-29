<?php
$strings = ["Hello", "World", "PHP", "Programming"];


foreach ($strings as $str) {

    $vowels = preg_match_all('/[aeiouAEIOU]/', $str);

    $reversed = strrev($str);

    echo "Original String: $str, Vowel Count: $vowels, Reversed String: $reversed\n";
}
?>
