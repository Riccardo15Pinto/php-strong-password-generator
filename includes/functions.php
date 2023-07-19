<?php
function get_random_Password($length_password, $no_repeat_filter, $big_font_filter, $number_filter, $symbol_filter)
{
    $small_font = 'abcdefghijklmnopqrstuvwxyz';
    $big_font = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $number = '1234567890';
    $symbol = '-!£$%&?@#';
    $alphabet_characters = $small_font . ' ' . $big_font . ' ' . $number . ' ' . $symbol;
    $password = [];
    $alphabet_Length = strlen($alphabet_characters) - 1;

    if ($big_font_filter) $alphabet_characters = $small_font . ' ' . $number . ' ' . $symbol;
    if ($number_filter) $alphabet_characters = $small_font . ' ' . $big_font . ' ' . $symbol;
    if ($symbol_filter) $alphabet_characters = $small_font . ' ' . $number . ' ' . $big_font;
    if ($big_font_filter && $symbol_filter && $number_filter) $alphabet_characters = $small_font;

    do {
        $alphabet_index = rand(0, $alphabet_Length);
        $char = $alphabet_characters[$alphabet_index];
        if ($no_repeat_filter && $length_password < 20) {
            if (!in_array($char, $password)) {
                $password[] = $char;
            }
        } else {
            $password[] = $char;
        }
    } while (count($password) < $length_password);

    return implode($password);
}
