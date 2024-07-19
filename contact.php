<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $destinataire = "ouedraogow531@email.com"; // Remplacez par votre adresse e-mail
    $sujet = "Nouveau message de $nom";
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Email: $email\n";
    $corps_message .= "Message:\n$message";

    // Envoi de l'e-mail
    mail($destinataire, $sujet, $corps_message);

    // Redirection vers une page de confirmation ou de remerciement
    header("Location: index.html");
    exit();
}
?>
