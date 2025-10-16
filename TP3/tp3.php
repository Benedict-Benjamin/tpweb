<?php include '../header.html'; ?>
<link rel="stylesheet" href="../style.css">


<h1>TP Web PHP&Mysql</h1>
<p><a href="">Connexion</a>.</p>

<title>Liste d'Articles</title>
</head>
<body>

<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=produits', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query("SELECT nom, prixu, quantite, ref FROM article");
    $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur SQL : " . $e->getMessage());
}
?>

<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>Référence</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php if (count($articles) > 0): ?>
        <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= htmlspecialchars($article['nom']) ?></td>
                <td><?= number_format($article['prixu'], 2) ?> €</td>
                <td><?= (int)$article['quantite'] ?></td>
                <td><?= htmlspecialchars($article['ref']) ?></td>
                <td>
                    <button class="btn_modif" data-ref="<?= htmlspecialchars($article['ref']) ?>">Modifier</button>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="5">Aucun article trouvé.</td></tr>
    <?php endif; ?>
    </tbody>
</table>

<?php include '../footer.html'; ?>

</body>
