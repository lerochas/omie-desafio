<?php

//AUTOLOAD DE CLASSES DO COMPOSER
require __DIR__ . '/vendor/autoload.php';

//DEPENDÊNCIAS
use \App\Session\User as SessionUser;

//PÁGINA EXIBIDA A DEPENDER DO LOGIN
include SessionUser::isLogged() ?
    __DIR__ . '/includes/index.php' :
    __DIR__ . '/includes/login.php';

//PARA VISUALIZAR A PÁGINA SEM PASSAR PELA TELA DE LOGIN,
//DESCOMENTE AS LINHAS 16, 17 E COMENTE AS LINHAS 10, 11 E 12 
// header('location: includes/index.php');
// exit;