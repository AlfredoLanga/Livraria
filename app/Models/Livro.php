<?php

class Livro {

    private $id;
    private $titulo;
    private $autor;
    private $editora;
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

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }

    // Database operations

    public function createLivro() {
        $sql = "INSERT INTO livros (titulo, autor, editora) VALUES (:titulo, :autor, :editora)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':editora', $this->editora);
        $stmt->execute();
    }

    public function updateLivro() {
        $sql = "UPDATE livros SET titulo = :titulo, autor = :autor, editora = :editora WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':titulo', $this->titulo);
        $stmt->bindParam(':autor', $this->autor);
        $stmt->bindParam(':editora', $this->editora);
        $stmt->execute();
    }

    public function deleteLivro() {
        $sql = "DELETE FROM livros WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
    }
}

?>
