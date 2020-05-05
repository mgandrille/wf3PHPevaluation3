<?php

include 'config/bdd.php';
$request = "SELECT * FROM logement WHERE id_logement=".$_GET["id"];
$response = $bdd->query($request);
$logement = $response->fetch(PDO::FETCH_ASSOC);

?>
<!-- ***** Fiche récapitulative d'un seul bien ***** -->

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5"><?= $logement['titre'] ?></h1>

        <div class="container_fluid">
            <div class="row">
                <div class="container mt-4">
                    <div class="media">
                        <img src="upload/<?= $logement['photo'] ?>" class="align-self-start mr-3" alt="..." width="300">
                        <div class="media-body">
                            <h3 class="mt-0">En <?= $logement['type_logement'] ?></h3>
                            <p><?= $logement['description'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="container row mt-4">
                    <div class="card" style="width: 18rem;">
                        <h6>Adresse :</h6>
                        <?= $logement['adresse'] ?> - <?= $logement['cp'] ?>  <?= $logement['ville'] ?>
                    </div>
                    <div class="card offset-1" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><h6>Surface :  </h6><?= $logement['surface'] ?> m²</li>
                            <li class="list-group-item"><h6>Prix :  </h6><?= $logement['prix'] ?> €</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'partials/footer.php' ?>