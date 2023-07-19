<?php
function get_random_Password($length_password)
{
    $alphabet_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-!£$%&?@#';
    $password = []; //remember to declare $pass as an array
    $alphabet_Length = strlen($alphabet_characters) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length_password; $i++) {
        $single_character = rand(0, $alphabet_Length);
        $password[] = $alphabet_characters[$single_character];
    }
    return implode($password); //turn the array into a string
}
