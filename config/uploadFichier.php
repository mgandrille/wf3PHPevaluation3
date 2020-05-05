<?php

$image = $_FILES['photo'];
$pathInfoData = pathinfo($image['name']);
$fileExtension = $pathInfoData['extension'];
$imageName = $pathInfoData['filename'];

// Attribution d'un nom modifié avec timestamp
$newImageName = $imageName . '-' . time() . '.' . $fileExtension;  

// Vérification de l'extension et du type de fichier
// Ainsi que du poids du fichier
$extensionAuthorised = ['jpg', 'png'];
$typeAuthorised = ['image/jpg', 'image/png'];

if(!in_array($fileExtension, $extensionAuthorised) && !in_array($image['type'], $typeAuthorised)) {
    echo "Format de fichier non pris en charge. Envoyer un fichier image (JPG ou PNG)";
} else if ($image['size'] > 314723) {
    echo "Le fichier est trop volumineux. Il ne doit pas dépasser 3Mo !";
}

// Déplacement de la photo dans le dossier upload
move_uploaded_file($image['tmp_name'], __DIR__ . '../../upload/' . $newImageName);


?>
