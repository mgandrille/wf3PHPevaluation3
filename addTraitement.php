<?php
require_once 'config/uploadFichier.php';

require 'config/bdd.php';
$request = "INSERT INTO logement (titre, adresse, ville, cp, surface, prix, photo, type_logement, description) 
            VALUES (:titre, :adresse, :ville, :cp, :surface, :prix, :photo, :type_logement, :description)";
$response = $bdd->prepare($request);

$response->execute([
    'titre'         => $_POST['titre'], 
    'adresse'       => $_POST['adresse'], 
    'ville'         => $_POST['ville'], 
    'cp'            => $_POST['cp'], 
    'surface'       => $_POST['surface'],
    'prix'          => $_POST['prix'],
    'type_logement' => $_POST['type_logement'],
    'description'   => $_POST['description'],
    'photo'         => $newImageName
]);

?>

<?php include 'partials/header.php' ; ?>
<?php include 'partials/navbar.php' ; ?>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Votre logement a bien été ajouté</h1>
        
        <div class="media">
            <img src="upload/<?= $newImageName ?>" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Fiche récapitulative</h5>
                <h6><?= $_POST['titre'] ?></h6>
                <p>Adresse : <?= $_POST['adresse'] ?> <br>
                <?= $_POST['cp'] ?>  <?= $_POST['ville'] ?></p>
                <p>Surface de <?= $_POST['surface'] ?> m²</p>
                <p>Au prix de <?= $_POST['prix'] ?> €</p>
                <p>Pour une <?= $_POST['type_logement'] ?></p>
            </div>
            <div>
                <?= $_POST['description'] ?>
            </div>
        </div>

    </div>
</main>    

<?php include 'partials/footer.php' ; ?>