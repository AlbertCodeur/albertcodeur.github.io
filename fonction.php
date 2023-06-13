
<?php
function insertion($id,$nom,$prix,$description){
    include("connexion.php");
    $req = "INSERT INTO `produit`(`Id_P`,`Nom_P`,`Prix`,`decription`) VALUES ('?','?','?','?')";
    $res = $db->prepare($req);
    $res->execute([$id, $nom, $prix, $description]);
}

insertion(1, "lait", 10000, "le lait est bien pour la sante");
?>