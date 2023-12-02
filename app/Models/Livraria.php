<?php
include 'config.php';
require_once 'Livro.php';
require_once 'Aluno.php';
require_once 'Emprestimo.php';

class Livraria {
    private $livro;
    private $aluno;
    private $emprestimo;

    public function __construct() {
        $this->livro = new Livro();
        $this->aluno = new Aluno();
        $this->emprestimo = new Emprestimo();
    }

    // Métodos para operações relacionadas a livros
    public function cadastrarLivro($titulo, $autor, $editora) {
        $this->livro->createLivro($titulo, $autor, $editora);
    }

    public function atualizarLivro($livroId, $titulo, $autor, $editora) {
        $this->livro->setId($livroId);
        $this->livro->setTitulo($titulo);
        $this->livro->setAutor($autor);
        $this->livro->setEditora($editora);
        $this->livro->updateLivro();
    }

    public function excluirLivro($livroId) {
        $this->livro->setId($livroId);
        $this->livro->deleteLivro();
    }

    // Métodos para operações relacionadas a alunos
    public function cadastrarAluno($nome, $bi, $dataNascimento) {
        $this->aluno->createAluno($nome, $bi, $dataNascimento);
    }

    public function atualizarAluno($alunoId, $nome, $bi, $dataNascimento) {
        $this->aluno->setNome($nome);
        $this->aluno->setBi($bi);
        $this->aluno->setDataNascimento($dataNascimento);
        $this->aluno->updateAluno();
    }

    public function excluirAluno($alunoId) {
        $this->aluno->deleteAluno();
    }

    // Métodos para operações relacionadas a empréstimos
    public function realizarEmprestimo($alunoId, $livroId, $dataEmprestimo, $dataDevolucao) {
        $this->emprestimo->setAlunoId($alunoId);
        $this->emprestimo->setLivroId($livroId);
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
