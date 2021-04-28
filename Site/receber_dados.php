<?php
function email($name, $email, $message) {
  $mail2 = new PHPMailer;
  $mail2->IsSMTP();

$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['message'];

  $mail2->From = "enviomeusite@gmail.com";
    $mail2->FromName = "Contato Site";

  $mail2->Host       = "go6.com.br";
  $mail2->Port       = "587";
  $mail2->SMTPAuth   = "";
  $mail2->Username   = "go6com";
  $mail2->Password   = "1w1gZWH5";

    $mail2->AddAddress($name, $email);

    $mail2->Subject = "Contato";

  $mail2->AltBody = "Para ver essa mensagem, use um programa compatível com HTML!";
    $mail2->MsgHTML($message);
  if ($mail2->Send()) {
    return "1";
  } else {
    return $mail2->ErrorInfo;
  }
}

$corpo_email = ($nome && $email && $mensagem);

$controle =  email("constantinofcaio@gmail.com" && "Caio Ferreira" && "Teste de envio" && $corpo_email);
if ($controle == "1") {
    echo "Envio OK";
} else {
    echo $controle;
}
?>