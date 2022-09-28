<?php
class Flash{
  public function __construct() {
      $this->bdd = bdd();
  }


// Create



// Read
    public function getFlashyId($id){
        $query = "SELECT * FROM flash
        WHERE id_flash = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id
        ));
        return $rs;
    }

    public function getAllFlash(){
        $query = "SELECT * FROM flash
          ORDER BY id_flash   DESC ";
        $rs = $this->bdd->query($query);
        return $rs;
    }



    // Delete
    public function deleteFlash($id){

        $query = "DELETE  FROM flash WHERE id_flash  = :id";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "id" => $id

        ));

        $nb = $rs->rowCount();
        return $nb;

    }


    // Verification valeur existant
    public function verifCategorie($propriete,$val){
        $query = "SELECT * FROM categorie WHERE $propriete = :val";
        $rs = $this->bdd->prepare($query);
        $rs->execute(array(
            "val" => $val
        ));

        return $rs;
    }




}

$flash = new Flash();