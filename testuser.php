<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once __DIR__ .'/src/User.php';

$user1 = new User();
$user1->setUsername('user1');
$user1->setPassword('hasło');
$user1->setEmail('user@email.pl');

var_dump($user1);

//jeśeli id jest -1 to robimy insert, a jeżeli jest inne niż -1 to robimy update