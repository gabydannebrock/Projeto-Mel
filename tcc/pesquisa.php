<?php
include("cabecalho.php");
include("funcoes.php");


$pesquisa=$_POST['pesquisa'];

$pesquisou=pesquisa($pesquisa);

print($pesquisou[0]['nome']);





