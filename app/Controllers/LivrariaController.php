<?php
include 'config.php';
require_once 'Livro.php';
require_once 'Aluno.php';
require_once 'Emprestimo.php';

class LivrariaController {
    private $livro;
    private $emprestimo;

    public function __construct() {
        $this->livro = new Livro();
        $this->emprestimo = new Emprestimo();
    }

    // Métodos para operações relacionadas a livros
    public function cadastrarLivro($titulo, $autor, $editora) {
        $this->livro->createLivro($titulo, $autor, $editora);
    }

    public function excluirLivro($livroId) {
        $this->livro->setId($livroId);
        $this->livro->deleteLivro();
    }

    // Métodos para operações relacionadas a empréstimos
    public function realizarEmprestimo( $dataEmprestimo, $dataDevolucao) {
        $this->emprestimo->setDataEmprestimo($dataEmprestimo);
        $this->emprestimo->setDataDevolucao($dataDevolucao);
        $this->emprestimo->createEmprestimo();
    }

    public function devolverLivro($emprestimoId) {
        $this->emprestimo->setId($emprestimoId);
        $this->emprestimo->deleteEmprestimo();
    }
}

?>
