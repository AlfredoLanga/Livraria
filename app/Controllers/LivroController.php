<?php
require_once '../Models/Livro.php';

class LivroController {
    private $livroModel;

    public function __construct(Livro $livroModel) {
        $this->livroModel = $livroModel;
    }

    public function createLivro($titulo, $autor, $editora) {
        // Validar dados, se necessário

        $this->livroModel->setTitulo($titulo);
        $this->livroModel->setAutor($autor);
        $this->livroModel->setEditora($editora);

        $this->livroModel->createLivro();
    }

    public function atualizarLivro($livroId, $titulo, $autor, $editora) {
        // Validar dados, se necessário

        $this->livroModel->setId($livroId);
        $this->livroModel->setTitulo($titulo);
        $this->livroModel->setAutor($autor);
        $this->livroModel->setEditora($editora);

        $this->livroModel->updateLivro();
    }

    public function excluirLivro($livroId) {
        // Validar dados, se necessário

        $this->livroModel->setId($livroId);

        $this->livroModel->deleteLivro();
    }
}
?>
