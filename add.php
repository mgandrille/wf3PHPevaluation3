<?php include 'partials/header.php' ; ?>
<?php include 'partials/navbar.php' ; ?>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-5">Ajouter un logement</h1>

        <form action="addTraitement.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" name="titre" id="titre"
                    placeholder="Appartement de haut standing" required>
            </div>
            <div class="form-group">
                <label for="adresse">Addresse</label>
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="12 allée des Platanes"
                    required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="cp">Code Postal</label>
                    <input type="text" class="form-control" name="cp" id="cp" size="5" maxlength="5" placeholder="69001"
                        required>
                </div>
                <div class="form-group col-md-9">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" name="ville" id="ville" placeholder="Lyon" required>
                </div>
            </div>
            <div class="form-group">
                <label for="surface">Surface (en m²)</label>
                <input type="number" name="surface" id="surface" class="form-control" placeholder="12" min="0" required>
                <small class="text-muted">La surface est exprimée en m² et elle est arrondie au chiffre
                    supérieur</small>
            </div>
            <div class="form-group">
                <label for="prix">Prix (en €)</label>
                <input type="number" name="prix" id="prix" class="form-control" placeholder="2300" min="0" required>
                <small class="text-muted">Le prix est exprimé en euros</small>
            </div>
            <div class="form-group">
                <label for="type_logement">Type de logement</label>
                <select multiple class="form-control" name="type_logement" id="type_logement" required>
                    <option value="location">Location</option>
                    <option value="vente">Vente</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Description du produit"></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Photo du logement</label>
                <input type="file" id="photo" name="photo">
            </div>
            <input class="btn btn-info" type="submit" value="Ajouter">
        </form>
    </div>
</main>

<?php include 'partials/footer.php' ; ?>