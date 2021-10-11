<?php
if(!isset($_SESSION)){
    session_start();
}

unset($_SESSION['user']);
unset($_SESSION['nome']);
unset($_SESSION['tipo']);

header('Location: '.'http://localhost/CRUDS-PONTE-MAIN/ponte/login/index.php');