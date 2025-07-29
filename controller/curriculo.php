<?php
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereço = $_POST["endereço"];

$efc = $_POST["efc"];
$emc = $_POST["emc"];
$esc = $_POST["esc"];
$pgc = $_POST["pgc"];
$mc = $_POST["mc"];

$empresa = $_POST["empresa"];
$data_de_admissão = $_POST["data_de_admissão"];
$data_de_demissão = $_POST["data_de_demissão"];
$atividade_exercida = $_POST["atividade_exercida"];

$descrição = $_POST["descrição"];
$horas = $_POST["horas"];
$ano_de_conclusão = $_POST["ano_de_conclusão"];

$informações = $_POST["informações"];

echo "DADOS PESSOAIS";
echo $telenone;
echo $email;
echo $endereço;

echo "ESCOLARIDADE";
echo $efc;
echo $esc;
echo $pgc;
echo $mc;
  
echo "Experiencia Profissional";
echo $empresa;
echo $data_de_admissão;
echo $data_de_demissão;
echo $atividade_exercida;

echo "Cursos e Idiomas";
echo $descrição;
echo $horas;
echo $ano_de_conclusão;

echo "INFORMAÇÔES";
echo $informações;

?>
