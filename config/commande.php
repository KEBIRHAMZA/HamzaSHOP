<?php

function ajouter($image,$nom,$prix,$desc){
    if(require("connextion.php")){
        $rec = $access->prepare("INSERT INTO PRODUITS(image,nom,prix,description) VALUES(?, ?, ?, ?)");

        $rec->execute(array($image,$nom,$prix,$desc));
        $rec->closeCursor();
    }
}

function afficher(){
    if(require("connextion.php")){
        $rec = $access->prepare("SELECT * FROM PRODUITS ORDER BY ID DESC");
        $rec->execute();
        $data = $rec->fetchAll(PDO::FETCH_OBJ);

        return $data;
        $rec->closeCursor();
    }
}

function suprimer($id){
    if(require("connextion.php")){
        $rec = $access->prepare("DELETE FROM PRODUITS WHERE ID=?");
        $rec->execute(array($id));
    }
}
?>