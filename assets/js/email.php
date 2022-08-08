$destinatario = "theu.bispo@gmail.com.br";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$subject = $_REQUEST['subject'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $name . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $message . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $subject , $body, "From: $email\r\n");