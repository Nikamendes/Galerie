<?php
require_once './back/config.php';
require_once 'menu.php';

// Vérifier si le formulaire a été soumis avec succès
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    
    if ($status === 'success') {
        echo '<h1>Message envoyé avec succès !</h1>';
        echo '<p>Merci pour votre message. Nous vous répondrons dès que possible.</p>';
    } elseif ($status === 'error') {
        echo '<h1>Une erreur s\'est produite lors de l\'envoi du message.</h1>';
        echo '<p>Veuillez réessayer ultérieurement.</p>';
    }
} else {
    echo '<h1>Confirmation</h1>';
    echo '<p>Votre message a été envoyé.</p>';
}
?>