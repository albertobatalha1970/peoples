<?php


$foto=$_FILES['foto']['name'];
$pasta="fotos/";
$duplo=$pasta.$foto;
$nome=$_POST['nome'];
$fone=$_POST['fone'];
$senha=$_POST['senha'];
$foto=$_POST['foto'];


if(move_uploaded_file($_FILES['foto']['tmp_name'],$duplo))
{
mysql_query("INSERT INTO cadastros(id,nome,fone,senha,foto)VALUES(NULL,'$nome','$fone','$senha','$duplo')") or die("Nenhum dado foi inserido na tabela");

echo "<script> alert('Cadastro Atualizado com sucesso.')";

//session
//session_start();
//$_SESSION['cadastro'] = 'Cadastro realizado com sucesso!';

header("location:login.php");
}
else
{
	header("location:index.php");
}




?>
