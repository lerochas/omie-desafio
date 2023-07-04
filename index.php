<?php

//AUTOLOAD DE CLASSES DO COMPOSER
require __DIR__ . '/vendor/autoload.php';

//DEPENDÊNCIAS
use \App\Session\User as SessionUser;

//PÁGINA EXIBIDA A DEPENDER DO LOGIN
include SessionUser::isLogged() ?
    __DIR__ . '/includes/index.php' :
    __DIR__ . '/includes/login.php';