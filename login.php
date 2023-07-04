<?php

//AUTOLOAD DO COMPOSER
require __DIR__.'/vendor/autoload.php';

//DEPENDÊNCIAS
use Google\Client as GoogleClient;
use \App\Session\User as SessionUser;

//VALIDAÇÃO PRINCIPAL DO COOKIE


//VERIFICA OS CAMPOS OBRIGATÓRIOS
if(!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])){
    header('location: index.php');
    exit;
}

//COOKIE CSRF
$cookie = $_COOKIE['g_csrf_token'] ?? '';

//VERIFICA O VALOR DO COOKIE E DO POST PARA O CSRF
if($_POST['g_csrf_token'] != $cookie){
    header('location: index.php');
    exit;
}

//VALIDAÇÃO SECUNDÁRIA DO TOKEN
$client = new GoogleClient(['client_id' => '999962858437-h5i64rkppplrmu76r0kkcv39k54r57de.apps.googleusercontent.com']);
$payload = $client->verifyIdToken($_POST['credential']);
if (isset($payload['email'])) {
    SessionUser::login($payload['name'],$payload['email']);
    header('location: includes/index.php');
    exit;
}

//PROBLEMAS AO CONSULTAR API
die('Erro ao consultar API');
