<?php
function count_vowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

function reverse_string($string) {
    return strrev($string);
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowel_count = count_vowels($string);
    $reversed_string = reverse_string($string);
    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n";
}
?>