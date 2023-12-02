
<?php
require_once '../Models/Emprestimo.php';

class EmprestimoController {
    private $emprestimoModel;

    public function __construct(Emprestimo $emprestimoModel) {
        $this->emprestimoModel = $emprestimoModel;
    }

    public function criarEmprestimo($alunoId, $livroId, $dataEmprestimo, $dataDevolucao) {
       

        $this->emprestimoModel->setAlunoId($alunoId);
        $this->emprestimoModel->setLivroId($livroId);
        $this->emprestimoModel->setDataEmprestimo($dataEmprestimo);
        $this->emprestimoModel->setDataDevolucao($dataDevolucao);

        $this->emprestimoModel->createEmprestimo();
    }

    public function atualizarEmprestimo($emprestimoId, $alunoId, $livroId, $dataEmprestimo, $dataDevolucao) {
        

        $this->emprestimoModel->setId($emprestimoId);
        $this->emprestimoModel->setAlunoId($alunoId);
        $this->emprestimoModel->setLivroId($livroId);
        $this->emprestimoModel->setDataEmprestimo($dataEmprestimo);
        $this->emprestimoModel->setDataDevolucao($dataDevolucao);

        $this->emprestimoModel->updateEmprestimo();
    }

    public function excluirEmprestimo($emprestimoId) {
     

        $this->emprestimoModel->setId($emprestimoId);

        $this->emprestimoModel->deleteEmprestimo();
    }
}
?>

