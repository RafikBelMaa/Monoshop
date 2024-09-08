<?php
require("../config/commandes.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="/docs/5.3/assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
</head>

<body>
  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <form method="$_POST" action="admin.php">
          <div class="form-group">
            <label for="exampleInputTitle1">Titre Image</label>
            <input type="name" class="form-control" name="image" required>
          </div>
          <div class="form-group">
            <label for="exampleInputName1">Nom du Produit</label>
            <input type="text" class="form-control" name="nom" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPrice1">Prix</label>
            <input type="number" class="form-control" name="prix" required>
          </div>
          <div class="form-group">
            <label for="exampleInputDescription1">Description</label>
            <input type="text-area" class="form-control" name="description" required>
          </div>

          <button type="submit" class="btn btn-primary" name="validez">Ajoute un nouveaux produit</button>
        </form>

      </div>
    </div>
  </div>
</body>

</html>

<?php

if (isset($_POST['validez'])) {
  # code...
  if (isset($_POST['image']) && isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['description'])) {
    # code...
    if (!empty($_POST['image']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['description'])) {
      $image = htmlspecialchars(strip_tags($_POST['image']));
      $nom = htmlspecialchars(strip_tags($_POST['nom']));
      $prix = htmlspecialchars(strip_tags($_POST['prix']));
      $description = htmlspecialchars(strip_tags($_POST['description']));
      try {
        //code...
        ajouter($image, $nom, $prix, $description);
        echo "Produit ajouté avec succès!";
      } catch (\Throwable $th) {
        //throw $th;
        echo "Erreur : " . $th->getMessage();
      }
    }
  }
}
?>