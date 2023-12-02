<?
require_once '../Controllers/AlunoController.php';
require_once '../Models/Aluno.php';
$alunoController = new AlunoController(new Aluno);
if($_SERVER($_POST['submit'])){
  $nome = $_POST['nome'];
  $bi = $_POST['bi'];
  $data = $_POST['data'];
  $alunoController -> creatAluno($nome, $bi, $dataNascimento);
  header("location: index.html");
  exit();

}
?>