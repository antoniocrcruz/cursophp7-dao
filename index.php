<?php 



require_once("config.php");
/*select simples de usuários
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//carrega um usuário
//$root = new Usuario();
//$root->loadById(3);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getList();//posso chamar direto pois o método é estático, logo não é instanciado
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);


//carrega um usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("tom", "34567");
//echo $usuario;


//INSERINDO NOVO USUÁRIO
//$aluno = new Usuario("aluno", "@lun0");
//$aluno->insert();
//echo $aluno;

$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "qwerty");

echo $usuario;

 ?>