<!--
@creator : MARQUES Simon
@create : 24/09/2020
@last_update :24/09/2020-->

<?php


class Object{
    public $dbh = false;

    function __construct() {
        $dsn = 'mysql:dbname=projet_web_3il;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $dbhBDD = null;
        try {
            $dbhBDD = new PDO($dsn, $user, $password);
            $this->dbh = $dbhBDD;
        }catch(PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            return false;
        }
    }

    /**
     * Recupère la liste des objets non affectées
     * 
     * @return $listNoAffect La liste des objets non affichées
     */
    function getListNoAffect(){
        $objNoAffect = array();
        $sql = "SELECT * 
                FROM objet
                WHERE display = 0";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $objNoAffect = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $objNoAffect; 
    }

    /**
     *  Recupère la liste des objets affectées
     * 
     * @return $listNoAffect La liste des objets affichées
     */
    function getListAffect(){
        $objAffect = array();
        $sql = "SELECT * 
                FROM objet
                WHERE display = 1";
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $objAffect = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $objAffect;/* listNoAffect : Liste des objects afficher*/   
    }

    /**
     * Créer un nouvel objet dans la BDD
     * @param $prix Prix de l'objet
     * @param $prix Prix de l'objet
     * @param $description Description de l'objet
     * @param $srcImg Chemin de l'image 
     * 
     * @return succès :true , erreur : false
     */
    function addObject($titre,$prix, $description, $srcImg){
        try{
            $sqlAdd = "INSERT INTO objet(titre,prix,description,chemin_img,display)
            VALUES('$titre','$prix','$description','$srcImg',false)";
            $succesCreateObject = $this->dbh->exec($sqlAdd);
            if($succesCreateObject == 1){
                return true;
            }
            return false;
        } catch(PDOException $e) {
            return false;
        }
    }

    /**
     * Suppression objet de la BDD
     * 
     * @param $id ID de l'objet 
     * 
     * @return $succesDeleteObjet Succès : true , erreur : false
     */
    function deleteObject($id){
        try{
            $sqlDelete = "DELETE
                          FROM objet
                          WHERE id = $id";
            $succesDeleteObject = $this->dbh->exec($sqlDelete);
            if($succesDeleteObject == 1){
                return true;
            }
            return false;
        } catch(PDOException $e) {
            return false;
        }
    }
    /**
     * Mise à jour de l'affichage
     * 
     * @param $id ID de l'objet à mettre à jour
     * @param $bool True : à afficher, False : à ne plus afficher
     * 
     * @return True : succès , False : erreur
     */
    function updateDisplay($id, $bool){
        try{
            $sqlUpdate = "UPDATE objet
                        SET display = $bool
                        WHERE id = $id";
            $succes = $this->dbh->exec($sqlUpdate);
            if($succes == 1){
                return true;
            }
            return false;
        } catch(PDOException $e) {
            return false;
        }
    }
}
?>