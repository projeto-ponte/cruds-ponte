<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    div#corpo {
        width: 800px;
        margin: auto;
        padding: 20px;
        background-color: white;
        box-shadow: 0px 0px 30px #777;
    }
</style>
<?php
require_once "includes/function.php";
if (is_logado() == true) {
    require_once "includes/menuComponent.php";
} else {
    echo '<div id="corpo">';
    echo '<div class="alert alert-danger" role="alert">
                   Usuário não logado
                  </div></div>';
}
