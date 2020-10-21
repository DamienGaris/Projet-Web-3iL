
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
     * @param $titre titre de l'objet
     * @param $prix Prix de l'objet
     * @param $description Description de l'objet
     * @param $date Date de sortie de l'objet
     * @param $img Chemin de l'image 
     * @param $taille Taille de l'image
     * 
     * @return succès :true , erreur : false
     */
    function addObject($titre,$prix, $description, $categorie, $date, $img, $taille){
        try{
            var_dump($img);
            $sqlAdd = "INSERT INTO objet(titre,prix,description,categorie,date_sortie,chemin_img,taille,display)
            VALUES('$titre','$prix','$description','$categorie,'$date','$img','$taille',false)";
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

    /**
     * Mise à jour des textes à l'accueil
     * 
     * @param $titre Titre
     * @param $cat1 Catégorie de produit 1
     * @param $cat2 Catégorie de produit 2
     * @param $cat3 Catégorie de produit 3
     * 
     * @return True : reussite et False : erreur
     */
    function updateText($titre,$cat1,$cat2,$cat3,$des1,$des2,$des3){
        try{
            $sqlUpdateText ="UPDATE `text`
                            SET titre = '$titre', cat1 = '$cat1', cat2 ='$cat2', cat3 = '$cat3', des1 = '$des1', des2 = '$des2', des1 = '$des3'
                            WHERE id = 1";
            $succes = $this->dbh->exec($sqlUpdateText);
            if($succes == 1){
                return true;
            }
            return false;
        } catch(PDOException $e) {
            return false;
        }
    }

    /**
     * Retourne le texte pour la page d'accueil
     * 
     */
    function getText(){
        $sqlText = "SELECT titre, cat1, cat2, cat3, des1, des2, des3
                          FROM `text`
                          WHERE id = 1";
        $sth = $this->dbh->prepare($sqlText);
        $sth->execute();
        $dataText = $sth->fetchAll(PDO::FETCH_ASSOC);
        if(empty($dataText)){
            return false;
        }
        return $dataText;
    }
}
?>