<?php
require "Colaborador.php";
require "Desenvolvedor.php";
require "Designer.php";
require "FolhaPagamento.php";
require "Diretor.php";

$dev = new Desenvolvedor(100);
$designer = new Designer(3);
$diretor = new Diretor();

$folha = new FolhaPagamento($diretor);

$folha->gerarFolha();
