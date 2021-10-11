<?php 
    $banco = new mysqli("localhost", "egc", "20200106", "projeto_ponte");
	if($banco->connect_errno){
        echo "<p>Encontrei um erro $banco->errno-->$banco->connect_error</p>";
		die();
	}
	$banco->query("SET NAMES 'utf-8'");
	$banco->query("SET character_set_connection=utf-8");
	$banco->query("SET character_set_client=utf-8");
	$banco->query("SET character_set_results=utf-8");
	
	