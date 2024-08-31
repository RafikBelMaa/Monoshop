<?php

function ajouter($image, $nom, $prix, $description)
{

  if (require("connexion.php")) {

    $req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUE ($image, $nom, $prix, $description)");

    $req->execute(array($image, $nom, $prix, $description));

    $req->closeCursor();
  }
}

function afficher()
{
  if (require("connexion.php")) {

    $req = $access->prepare("SELECT * FROM produits ORDER BY id_produit DESC");

    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $req->closeCursor();
  }

  function delete($id)
  {
    if (require("connexion.php")) {
      $req = $access->prepare("DELETE  FROM produits WHERE id_produit=?");

      $req->execute(array($id));
    }
  }
}
