<?php
$adresse = "thibaudr1999@hotmail.com";
$adresse = "antoine.lefebvre14@free.fr";
$site = "http://www.web-design-dao.fr/";


$TO = $adresse;

$head = "From: ".$adresse."\n";
$head .= "X-Sender: <".$adresse.">\n";
$head .= "X-Mailer: PHP\n";
$head .= "Return-Path: <".$adresse.">\n";
$head .= "Content-Type: text/plain; charset=iso-8859-1\n";

$sujet = "Message - Site Web";

$informations = "
Nom : ".$_POST['name']." \r\n
Prenom : ".$_POST['surname']." \r\n
Adresse mail : ".$_POST['mail']." \r\n
Message : ".$_POST['message']." \r\n
";

$res = mail($TO, $sujet ,$informations ,$head);

if (true == $res) {
Header("Location: confirm_form.html" );
} /*
else {
Header("Location: err_form.html" );
}*/
?>