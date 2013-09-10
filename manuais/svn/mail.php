<?php
  // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
  require("class.phpmailer.php");
  $mail = new PHPMailer();
  $mail->Charset = 'UTF-8';
  $mail->From = 'noreply.cpo@gmail.com';
  $mail->FromName = '[CPO]: SVN SigPod';
  
  // Setando o conteudo
  $mail->IsHTML(true);
  $mail->Subject = 'Commmit';
  $msg = "Realizado por: ".$argv[5]."<br>";
  $msg .= "Repositório: ".$argv[1]."<br>";
  $msg .= "Versão: ".$argv[2]."<br>";
  $msg .= "Mensagem: ".$argv[3]."<br>";
  $msg .= "Arquivos: ".$argv[4]."<br>";
  $msg .= '<b>Não esqueça de dar update!!!</b>';
  $mail->Body     = $msg;
  
  // Validando a autenticação
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->Host     = "ssl://smtp.googlemail.com";
  $mail->Port     = 465;
  $mail->Username = 'noreply.cpo@gmail.com';
  $mail->Password = '18svnmail31';
  // Setando o endereço de recebimento
  $mail->AddAddress('leandro.kummel@gmail.com', 'Leandro K. T. Mendes');
  $mail->AddAddress('fscarelli@gmail.com', 'Flavio Scarelli');
  $mail->AddAddress('and7_oliveira@hotmail.com', 'Anderson Oliveira');
  // Enviando o e-mail
  if( $mail->Send() )
    echo 'E-mail enviado com sucesso';
  else
    echo 'Erro ao enviar e-mail';
  
?>
