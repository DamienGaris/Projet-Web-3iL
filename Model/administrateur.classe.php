<!-- 
@creator : MARQUES Simon
@create : 24/09/2020
@last_update :24/09/2020 -->

<?php 
    
class Administrateur{
    public $login = null;
    public $password = null;
    public $connect = false;
    public $bddConnection = null;
    public $dbh =null;

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
 * Constructeur de l'administrateur avec les variables passées en parem
 * @param : $login Login de l'administrateur
 * @param : $login Login de l'administrateur
 */
function dataConstruct($login,$password){
    $connectionOrNot = $this->tryConnection($login,$password);
    if(!$connectionOrNot){
        return;
    }
    $this->login = $login;
    $this->password = passsword_hash($password, PASSWORD_DEFAULT);
    $this->connect = $connectionOrNot;
}

/**
 * Etablit la connection de l'administrateur
 * @param $login Login de l'administrateur
 * @param : $login Login de l'administrateur
 * 
 * @return : Connection réussi : True, Erreur de connection : false
 */
function tryConnection($login,$password){
try{
    $dataAdministrateur = array();
    $sql = "SELECT login, mdp 
    FROM administrateur 
    WHERE login = '$login'";
    $sth = $this->dbh->prepare($sql);
    $sth->execute();
    $dataAdmin = $sth->fetchAll(PDO::FETCH_ASSOC);
    if(password_verify($password, $dataAdmin[0]['mdp']) && $dataAdmin[0]['login'] == $login){
        return true;
    } else{
        return false;
    }
} catch(PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    return false;
}
}

/**
 * Créer un administrateur
 * @param $login Login de l'administrateur à créer
 * @param $mdp Mot de pas de l'utilisateur à créer
 * 
 * @return $successCreate succès : true , erreur : false
 */
function createAdmin($login, $mdp){
    try{
    $passwordHash = password_hash($mdp, PASSWORD_BCRYPT);
    $sqlCreate = "INSERT INTO administrateur (login,mdp)
                VALUES('$login','$passwordHash')";
    $successCreate = $this->dbh->exec($sqlCreate); /* Execute la requete pour savoir si l'insertion est ok, SUCCESS : TRUE ou ERREUR : FALSE */
    return $successCreate;
} catch(PDOException $e) {
    echo $e->getMessage();
    return false;
}
}
/**
 * Recupère la liste des objets non affectées
 * 
 * @return $listNoAffect La liste des objets non affichées
 */
function getListNoAffect(){
    $sql = "SELECT * 
            FROM object
            WHERE display = true";
    return 0; /* listNoAffect : Liste des objects non afficher*/   
}

/**
 *  Recupère la liste des objets affectées
 * 
 * @return $listNoAffect La liste des objets affichées
 */
function getListAffect(){
    $sql = "SELECT * 
            FROM object
            WHERE display = false";
    return 0;/* listNoAffect : Liste des objects afficher*/   
}

/**
 * Créer un nouvel objet dans la BDD
 * @param $prix Prix de l'objet
 * @param $description Description de l'objet
 * @param $srcImg Chemin de l'image 
 * 
 * @return succès :true , erreur : false
 */
function addObject($prix, $description, $srcImg){
    try{
        $sql = "INSERT INTO object
        VALUES('$prix','$description','$srcImg',false)";
        $succesCreateObject = 0;/* Exécution requete qui retourne true pour succes et false pour erreur */
        return true;
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
        $sql = "DELETE *
                FROM object
                WHERE id =$id";
        $succesCreateObject = 0;/* Exécution requete qui retourne true pour succes et false pour erreur */
        return true;
    } catch(PDOException $e) {
        return false;
    }
}
}
?>
