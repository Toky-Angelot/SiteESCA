<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail du destinataire
    $destinataire = "angelotferdinand@gmail.com";

    // Sujet de l'e-mail
    $sujet = "Nouveau message de $nom";

    // En-têtes de l'e-mail
    $headers = "De: $email\r\n";
    $headers .= "Répondre à: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Corps de l'e-mail
    $corps = "Nom: $nom <br>";
    $corps .= "Email: $email <br>";
    $corps .= "Message: <br>$message";

    // Envoi de l'e-mail
    if (mail($destinataire, $sujet, $corps, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
