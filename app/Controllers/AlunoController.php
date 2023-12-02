<?php
require_once '../Models/Aluno.php';

class AlunoController {
    private $alunoModel;

    public function __construct(Aluno $alunoModel) {
        $this->alunoModel = $alunoModel;
    }

    public function creatAluno($nome, $bi, $dataNascimento) {
        // Validar dados, se necessário

        $this->alunoModel->setNome($nome);
        $this->alunoModel->setBi($bi);
        $this->alunoModel->setDataNascimento($dataNascimento);

        $this->alunoModel->createAluno();
    }

    public function atualizarAluno($alunoId, $nome, $bi, $dataNascimento) {
        // Validar dados, se necessário
        $this->alunoModel->setNome($nome);
        $this->alunoModel->setBi($bi);
        $this->alunoModel->setDataNascimento($dataNascimento);

        $this->alunoModel->updateAluno();
    }

    public function excluirAluno($alunoId) {
        // Validar dados, se necessário

        $this->alunoModel->deleteAluno();
    }
}
?>
