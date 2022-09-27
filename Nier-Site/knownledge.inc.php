<?php 
header("content-type:text/html;charset=utf-8");

include 'config.php';
include 'functions.php';

$res = get_pass();

?>

<div class="passform">
    <form method="post">
    Ваш пароль: <br />
    <input type="text" name="password" value="<?=$res?>"><br />
</div>

        <div class="button-wrapper">
            
            <button onclick="<?=$res?>">New_Generate!</button>
            
        </div>

<?php include "calculate.php"?>

<?php include "time.php"?>