<?php
require_once './back/config.php';
require_once 'menu.php';

// Recuperar los tarifas desde la base de datos utilizando una consulta preparada
$sql = "SELECT * FROM galerie_prix";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<div class="container">
    <h1>Tarifs</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Tarif</th>
            <th>Description</th>
        </tr>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['titre']); ?></td>
                <td><?php echo htmlspecialchars($row['tarifs']) ?> euros</td>
                <td><?php echo htmlspecialchars($row['description']); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>