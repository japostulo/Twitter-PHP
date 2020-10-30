<?php
    use App\Tweet\Tweet;
    use App\User\User;

    require_once 'vendor/autoload.php';

    $tweet = new Tweet('1', 'VOU ME TORNAR UM PROGRAMADOR COM CERTEZA');

    $user = new User('1', 'Japostulo', 'João Apostulo Neto', 'japostulo@gmail.com');

    $user->print();

    $tweet->print();

?>