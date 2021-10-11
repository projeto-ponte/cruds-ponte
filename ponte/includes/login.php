<?php
function testarHash($senha, $hash){
    $ok = password_verify($senha, $hash);
    return $ok;
    }
    ?>