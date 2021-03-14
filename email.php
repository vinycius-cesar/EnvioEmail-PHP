<?php
 
 if(isset($_POST ['email']) && !empty($_POST ['email']))

  $nome = addcslashes($_POST ['name']);
  $email = addcslashes($_POST ['email']);
  $mensagem = addcslashes($_POST ['message']);

  $to = "vinyciuscesar307@gmail.com";
  $subject = "Contato - Formulario PHP";
  $body = "Nome: ".$nome. "\r\n".
           "Email: ".$email."\r\n".
           "Mensagem: ".$mensagem;

$header = "From: vinyciuscesar307@gmail.com"."\r\n".
          "Reply-To:".$email."\r\n".
          "x=Mailer:PHP/".phpversion();


if(mail($to, $subject,$body,$header)){
    echo("email enviado com sucesso!");
}else{
    echo("O email não pode ser enviado.");
}

?>