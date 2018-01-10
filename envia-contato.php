<?php echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n"; ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google; //??
date_default_timezone_set('America/Sao_Paulo');
require_once('vendor/autoload.php');

session_start();
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];


$mail = new PHPMailer;
$mail-> isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->AuthType = 'XOAUTH2';
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Fill in authentication details here
//Either the gmail account owner, or the user that gave consent
$email = 'email@gmail.com';
$clientId = 'GERADO_PELA_GOOGLE';
$clientSecret = 'GERADO_PELA_GOOGLE';
//Obtained by configuring and running get_oauth_token.php
//after setting up an app in Google Developer Console.
$refreshToken = 'GERADO_PELA_GOOGLE';
//Create a new OAuth2 provider instance
$provider = new Google(
    [
        'clientId' => $clientId,
        'clientSecret' => $clientSecret,
    ]
);
//Pass the OAuth provider instance to PHPMailer
$mail->setOAuth(
    new OAuth(
        [
            'provider' => $provider,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'refreshToken' => $refreshToken,
            'userName' => $email,
        ]
    )
);


$mail->setFrom("email@gmail.com", "Random Adm"); //envia
$mail->addAddress("email@gmail.com"); // receber
$mail->Subject = "Email de contato teste";
$mail->msgHTML("<html>De:{$nome}<br/>Email:{$email}<br/>Mensagem:{$mensagem}<br/>Kisses Random</html>");
$mail->AltBody = "De:{$nome}\nEmail:{$email}\nMensagem:{$mensagem}\nKisses Random";

if($mail->send())
{
	$_SESSION["success"] = "Email enviado com sucesso!";
	header("Location: index.php");
} 
else 
{
	$_SESSION["danger"] = "Falha no envio do email: ".$mail->ErrorInfo;
	header("Location: contato.php");
	
}

die();