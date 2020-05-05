<?php

include 'config/bdd.php';
$request = "SELECT * FROM logement";
$response = $bdd->query($request);
$logements = $response->fetchAll(PDO::FETCH_ASSOC);

// Réduire la taille des texte à 50 caractères
function miniAffichage($texte) {
    if (strlen($texte) >= 50) {
        $texte  = trim(substr($texte, 0, 50));
        $texte .= '...';
    }
    return $texte;
}

?>
<!-- ***** Page d'accueil ***** -->

<?php include 'partials/header.php' ; ?>
<?php include 'partials/navbar.php' ; ?>

<!-- Affichage de tous les biens -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Liste des logements disponibles</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Code Postal</th>
                    <th scope="col">Ville</th>
                    <th scope="col">Surface</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Photo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($logements as $logement) : ?>
                <tr>
                    <th scope="row"><?= $logement['id_logement'] ?></th>
                    <td><a href="view.php?id=<?= $logement['id_logement'] ?>"><?= $logement['titre'] ?></a></td>
                    <td><?= miniAffichage($logement['adresse']) ?></td>
                    <td><?= $logement['cp'] ?></td>
                    <td><?= $logement['ville'] ?></td>
                    <td><?= $logement['surface'] ?></td>
                    <td><?= $logement['prix'] ?></td>
                    <td><?= $logement['type_logement'] ?></td>
                    <td><?= miniAffichage($logement['description']) ?></td>                    
                    <td><img src="upload/<?= $logement['photo'] ?>" alt="" width="50" height="50"></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


</main>

<?php include 'partials/footer.php' ; ?>