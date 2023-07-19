<?php
//$first_filter, $second_filter, $third_filter, $fourth_filter
function get_random_Password($length_password, $first_filter)
{
    $alphabet_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890-!£$%&?@#';

    if ($first_filter) {
        $password = []; //remember to declare $pass as an array
        $alphabet_Length = strlen($alphabet_characters) - 1; //put the length -1 in cache
        // while (count($password) < $length_password) {
        // }

        do {
            $single_character = rand(0, $alphabet_Length);

            if (!in_array($single_character, $password)) {
                $password[] = $alphabet_characters[$single_character];
            }
        } while (count($password) < $length_password);
        return implode($password); //turn the array into a string
    }



    $password = []; //remember to declare $pass as an array
    $alphabet_Length = strlen($alphabet_characters) - 1; //put the length -1 in cache
    for ($i = 0; $i < $length_password; $i++) {
        $single_character = rand(0, $alphabet_Length);
        $password[] = $alphabet_characters[$single_character];
    }
    return implode($password); //turn the array into a string

}
    
    
    // $taboo = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // $new_alphabet_characters = str_replace($taboo, '', $alphabet_characters);
    // return $new_alphabet_characters;