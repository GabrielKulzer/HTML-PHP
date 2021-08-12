<?php
// Passando os dados obtidos pelo formulário para as variáveis abaixo
$nomeremetente = $_POST['emailnome'];
$emailremetente = trim($_POST['emailemail']);
$emaildestinatario = 'gabrielk.rodrigues@hotmail.com';
$telefone = $_POST['emailtel'];
$mensagem = $_POST['emailmen'];


//Mensagem - na real assunto do e-mail:
$mensagemHTML = '
Formulário de Contato -
Nome: '.$nomeremetente.' -
E-Mail: '.$emailremetente.' -
Telefone: '.$telefone.' -
Mensagem: '.$mensagem.' -
';

$headers = "Mensagem de Dados: \nNome: $nomeremetente \nE-Mail: $emailremetente\nTelefone: $telefone \nMensagem: $mensagem
 ";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $emailremetente\r\n";
// remetente
$headers .= "Return-Path: $emaildestinatario \r\n";
// return-path - envio
$envio = mail($emaildestinatario, $mensagemHTML, $headers);
if($envio)
	echo "<script>location.href='../view/sucesso.html'</script>";// Página que será redirecionada
?>
