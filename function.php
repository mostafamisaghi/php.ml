<?php

function my_login($user = null)
{
    return true;
}

function set_background_color($color)
{
    $result = "";
    switch ($color) {
        case 'red':
            $result = "#b00";
            break;
        case 'green':
            $result = "#0b0";
            break;
        case 'blue':
            $result = "#00b";
            break;
        default:
            $result = "fff";
            break;
    }
    return $result;
}

function get_users()
{
    return array(
        array("id" => '1', "name" => 'mostafa', "email" => 'mostafa@gmail.com'),
        array("id" => '2', "name" => 'zahra', "email" => 'zahra@gmail.com'),
        array("id" => '3', "name" => 'samira', "email" => 'samira@gmail.com'),
        array("id" => '4', "name" => 'parsa', "email" => 'parsa@gmail.com'),
        array("id" => '5', "name" => 'ashkan', "email" => 'ashkan@gmail.com'),
        array("id" => '6', "name" => 'elmira', "email" => 'elmira@gmail.com')
);
//    return null;
//    return null;
}

?>