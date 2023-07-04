<?php

//AUTOLOAD DO COMPOSER
require __DIR__.'/vendor/autoload.php';

//DEPENDÊNCIAS
use \App\Session\User as SessionUser;

//DESLOGA O USUÁRIO
SessionUser::logout();

//REDIRECIONA O USUÁRIO PARA O LOGIN
header('location: includes/login.php');
exit;