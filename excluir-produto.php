<?php
    require 'src/conexao-bd.php';
    require 'src/modelo/produto.php';
    require 'src/Repositorio/produtoRepositorio.php';

$produtosRepositorio = new ProdutoRepositorio($pdo);
$produtosRepositorio->deletar($_POST['id']);

header('Location: admin.php');