<?php
require_once '../Controllers/LivroController.php';
require_once '../Models/Livro.php';
$livroController = new LivroController(new Livro);
if ($_SERVER($_POST['submit'])){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $livroController ->createLivro($titulo, $autor, $editora);
    header("location: index.html");
    exit();
} 

?>