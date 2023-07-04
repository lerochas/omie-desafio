<?php
    $info = include_once __DIR__ . '/../App/Session/User.php';
    $user = \App\Session\User::getInfo();
?>

<div class="container">
    <div class="row row-cols-2">
        <div class="col-9" style="align-self: center;">
            <img src="../img/header.svg" style="width: 90%;">
        </div>
        <div class="col-3">
            <div style="color: #000; font-size: xx-small; text-align: center; margin-top: 7px;">Olá, <?=$user['name']?></div>
        </div>
    </div>
</div>