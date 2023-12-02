<?
    class Aluno {

        private $id;
        private $nome;
        private $bi;
        private $data_nascimento;

        private $pdo;
    
        public function __construct() {
            include 'config.php'; // Include the database configuration file
            $this->pdo = $pdo;
        }
    
        // Getter and Setter methods for each property
    
        public function getId() {
            return $this->id;
        }
    
        public function getNome() {
            return $this->nome;
        }
    
        public function setNome($nome) {
            $this->nome = $nome;
        }
    
        public function getBi() {
            return $this->bi;
        }
    
        public function setBi($bi) {
            $this->bi= $bi;
        }
    
        public function getDataNascimento() {
            return $this->data_nascimento;
        }
    
        public function setDataNascimento($data_nascimento) {
            $this->data_nascimento = $data_nascimento;
        }
    
        // Database operations
    
        public function createAluno() {
            $sql = "INSERT INTO alunos (nome, bi, data_nascimento) VALUES (:nome, :bi, :data_nascimento)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':bi', $this->bi);
            $stmt->bindParam(':data_nascimento', $this->data_nascimento);
            $stmt->execute();
        }
    
        public function updateAluno() {
            $sql = "UPDATE alunos SET nome = :nome, bi = :bi, data_nascimento = :data_nascimento WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':bi', $this->bi);
            $stmt->bindParam(':data_nascimento', $this->data_nascimento);
            $stmt->execute();
        }
    
        public function deleteAluno() {
            $sql = "DELETE FROM alunos WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $this->id);
            $stmt->execute();
            
        }
    }
?>