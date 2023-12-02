<?php

class Emprestimo {

    private $id;
    private $aluno_id;
    private $livro_id;
    private $data_emprestimo;
    private $data_devolucao;

    private $pdo;

    public function __construct() {
        include 'config.php'; // Include the database configuration file
        $this->pdo = $pdo;
    }

    // Getter and Setter methods for each property

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAlunoId() {
        return $this->aluno_id;
    }

    public function setAlunoId($aluno_id) {
        $this->aluno_id = $aluno_id;
    }

    public function getLivroId() {
        return $this->livro_id;
    }

    public function setLivroId($livro_id) {
        $this->livro_id = $livro_id;
    }

    public function getDataEmprestimo() {
        return $this->data_emprestimo;
    }

    public function setDataEmprestimo($data_emprestimo) {
        $this->data_emprestimo = $data_emprestimo;
    }

    public function getDataDevolucao() {
        return $this->data_devolucao;
    }

    public function setDataDevolucao($data_devolucao) {
        $this->data_devolucao = $data_devolucao;
    }

    // Database operations

    public function createEmprestimo() {
        $sql = "INSERT INTO emprestimos (aluno_id, livro_id, data_emprestimo, data_devolucao) VALUES (:aluno_id, :livro_id, :data_emprestimo, :data_devolucao)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':aluno_id', $this->aluno_id);
        $stmt->bindParam(':livro_id', $this->livro_id);
        $stmt->bindParam(':data_emprestimo', $this->data_emprestimo);
        $stmt->bindParam(':data_devolucao', $this->data_devolucao);
        $stmt->execute();
    }

    public function updateEmprestimo() {
        $sql = "UPDATE emprestimos SET aluno_id = :aluno_id, livro_id = :livro_id, data_emprestimo = :data_emprestimo, data_devolucao = :data_devolucao WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':aluno_id', $this->aluno_id);
        $stmt->bindParam(':livro_id', $this->livro_id);
        $stmt->bindParam(':data_emprestimo', $this->data_emprestimo);
        $stmt->bindParam(':data_devolucao', $this->data_devolucao);
        $stmt->execute();
    }

    public function deleteEmprestimo() {
        $sql = "DELETE FROM emprestimos WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }
}




?>

