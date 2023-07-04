<?php
    $info = include_once __DIR__ . '/../App/Session/User.php';
    $user = \App\Session\User::getInfo();
?>

<div class="container">
    <div class="row row-cols-3">
        <div class="col-3">
            <div style="color: #000; font-size: xx-small; text-align: center; margin-top: 12px; width: 100%">Olá, <?=$user['name']?></div>
        </div>
        <div class="col-6" style="align-self: center;">
            <img src="../img/header.svg" style="width: 100%;">
        </div>
        <div class="col-3">
            <a href="../logout.php">
                <button class="btn btn-link" style="color: #000; font-size: xx-small; text-align: center; margin-top: 5px; width: 100%">Sair</button>
            </a>
        </div>
    </div>
</div>