<?php
require_once './back/config.php';
require_once 'menu.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $nationalite = htmlspecialchars($_POST['nationalite']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Préparer et exécuter la requête d'insertion des données dans la base de données
    $sql = "INSERT INTO galerie_contact (nom, prenom, nationalite, email, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Binder les paramètres pour éviter les injections SQL
    $stmt->bind_param("sssss", $nom, $prenom, $nationalite, $email, $message);
    
    $stmt->execute();

    // Rediriger l'utilisateur vers une page de confirmation ou afficher un message d'erreur
    if ($stmt->affected_rows > 0) {
        header("Location: confirmation.php?status=success");
        exit();
    } else {
        header("Location: confirmation.php?status=error");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
  <form method="POST" action="contact.php">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="pays">Nationalité :</label>
    <select id="pays" name="nationalite"></select>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Envoyer</button>
  </form>

  <script>
    // Fonction pour récupérer les pays à partir de l'API "REST Countries"
    function fetchCountries() {
        const apiUrl = "https://restcountries.com/v3.1/all";

        return fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const countries = Object.values(data).map(country => country.name.common);
                return countries.sort();
            });
    }

    // Fonction pour générer la liste déroulante des pays
    function generateCountriesDropdown() {
        fetchCountries().then(countries => {
            const paysDropdown = document.getElementById("pays");
            countries.forEach(country => {
                const option = document.createElement("option");
                option.text = country;
                option.value = country;
                paysDropdown.appendChild(option);
            });
        });
    }

    // Appeler la fonction lors du chargement de la page
    window.onload = generateCountriesDropdown;
  </script>
</body>
</html>