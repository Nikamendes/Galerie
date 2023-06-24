<?php
require_once './back/config.php';
require_once 'menu.php';

// Récupérer toutes les photos depuis la base de données en utilisant une requête préparée
$sql = "SELECT * FROM galerie_photos";
$stmt = $conn->prepare($sql);
$conn->exec("USE k35gck9e_projets");
$stmt->execute();
$photos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<h1>Galerie de photos</h1>

<?php
$categories = ['Mariage', 'Grossesse', 'Bébé', 'Baptême', 'Couple'];

foreach ($categories as $category) {
    echo '<h2>' . htmlspecialchars($category) . ' :</h2>';
    echo '<div class="gallery">';
    
    // Récupérer les photos de la catégorie actuelle depuis la base de données en utilisant une requête préparée
    $sqlCategory = "SELECT * FROM galerie_photos WHERE categorie = ?";
    $stmtCategory = $conn->prepare($sqlCategory);
    $stmtCategory->execute([$category]);
    $photosCategory = $stmtCategory->fetchAll(PDO::FETCH_ASSOC);

    // Afficher les photos de la catégorie actuelle
    foreach ($photosCategory as $photo) {
        echo '<div class="photo">';
        echo '<img src="' . htmlspecialchars($photo['url']) . '" alt="' . htmlspecialchars($photo['description']) . '">';
        echo '<div class="caption">' . htmlspecialchars($photo['description']) . '</div>';
        echo '</div>';
    }
    
    echo '</div>';
}
?>
</body>
</html>