<?php
session_start();//on démarre la session
// $errors = [];
  $errors = array(); // on crée une vérif de champs


if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// on verifie existence de la clé
  $errors ['mail'] = "vous n'avez pas renseigné votre email";

  }
if(array_key_exists('antispam', $_POST)) {// on place un petit filet anti robots spammers
  $errors ['antispam'] = "Vous êtes un robots spammer";
  }
//On check les infos transmises lors de la validation
  if(!empty($errors)){ // si erreur on renvoie vers la page précédente
  $_SESSION['errors'] = $errors;//on stocke les erreurs
  $_SESSION['inputs'] = $_POST;
  header('Location: contact.php');
  }else{
  $_SESSION['success'] = 1;
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
  $headers .= 'FROM:' . htmlspecialchars($_POST['email']);
  $to = 'contact@ipx-lab.com'; // Insérer votre adresse email ICI
  $subject = 'Message envoyé par ' . htmlspecialchars($_POST['name']) .' - <i>' . htmlspecialchars($_POST['email']) .'</i>';
  $message_content = '
  <table>
  <tr>
  <td><b>Nouveau message reçu depuis notre plateforme web !</b></td>
  </tr>
  <tr>
  <td>'. $subject . '</td>
  </tr>
  <tr>
  <td></td>
  </tr>
  <tr>
  <td>'. htmlspecialchars($_POST['message']) .'</td>
  </tr>
  </table>
  ';
mail($to, $subject, $message_content, $headers);
  header('Location:../contact.php');
  }

 
 
 
 
 ini_set("SMTP", "172.27.9.3");
ini_set("smtp_port", 25);
ini_set("sendmail_from","contact@ipx-lab.com");
$adresse=$_POST[email];
$from.="From: contact@ipx-lab.com \r\n";
$from.="X-priority:3\n";
$texte="Nous avons bien reçu votre message et vous remercions d'avoir pris contact avec nous.<br/>";
$texte.="&Agrave; bientôt.<br/><br/>";
$texte.="L'équipe d'IPX";

$from.="MIME-Version: 1.0\r\n";
$from.="Content-Type: text/html";
$sujet="Internet eXchange Point";
 
if (mail($adresse,$sujet,$texte,$from))
echo("");
else
echo("");
?>