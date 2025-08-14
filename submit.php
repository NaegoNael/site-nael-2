<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $service = htmlspecialchars($_POST['service']);

    // Configuration de l'e-mail
    $to = "nael97naego@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau Rendez-vous - Barber Shop";
    $message = "
        Nouveau rendez-vous reçu :
        -------------------------
        Nom : $name
        Email : $email
        Date : $date
        Service : $service
    ";
    $headers = "From: no-reply@barbershop.com"; // Adresse e-mail de l'expéditeur

    // Envoyer l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "Rendez-vous confirmé ! Vous recevrez un e-mail de confirmation.";
    } else {
        echo "Erreur lors de l'envoi de l'e-mail.";
    }
} else {
    echo "Erreur lors de la soumission.";
}
?>