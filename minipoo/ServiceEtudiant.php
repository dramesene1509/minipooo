<?php
require_once ("boursier.php");
require_once ("etudiant.php");
require_once ("connection.php");

class ServiceEtudiant{

    public function addEtudiant( Etudiant $etudiant){
        $bdd=connexion();
        $requete=$bdd->prepare("INSERT INTO etudiants (matricule, nom, prenom, mail, telephone,datedenaissance)
        values(:matricule, :nom, :prenom, :mail,:tel,:datedenaiss)");
        // Maintenant on lie chacune de nos marqueurs pour recevoir les entrée utilisateurs
        $requete->bindValue(':matricule',$etudiant->getMatricule(),PDO::PARAM_STR);
        $requete->bindValue(':nom',$etudiant->getNom(),PDO::PARAM_STR);
        $requete->bindValue(':prenom',$etudiant->getPrenom(),PDO::PARAM_STR);
        $requete->bindValue(':mail',$etudiant->getMail(),PDO::PARAM_STR);
        $requete->bindValue(':tel',$etudiant->getTel(),PDO::PARAM_INT);
        $requete->bindValue(':datedenaiss',$etudiant->getDatedenaissance());
        $insert=$requete->execute();
            //var_dump($insert);
            if ($insert) {
                echo "Le contact a été bien enregistré";
            }
            else {
                echo  "Echec d'insertion";
            }
            $reqt = $bdd->query("SELECT MAX(id_etudiant) AS id FROM etudiants");
           while(($der=$reqt->fetch())){
            $id=$der["id"];
    
         //inerer un etudiant boursier
         if(get_class($etudiant) == "Boursier"){
        
        $reqt=$bdd->prepare("SELECT id_pension FROM pension WHERE libelle=:libelle");
        $idpension = $reqt->execute(array(':libelle' => $etudiant->getLibelle()));
                while ($a = $reqt->fetch()) {
                 $idpension = $a["id_pension"];
             }
            $reqt=$bdd->prepare("INSERT INTO boursier(id_etudiant ,id_pension) VALUES(?,?)");
                $test=$reqt->execute(array( $id,$idpension));
             if($test){
          
               echo "bien inserer dans  boursier";
             } 
            else{
                     echo "erreur";
             }
         }
        
           }
// Insertion d'un etudiant non boursier
                if(get_class($etudiant)=='Nonboursier'){
                $req = $bdd->query("SELECT MAX(id_etudiant) AS id FROM etudiants");
                while(($der=$req->fetch())){
                $id=$der["id"];
                $req=$bdd->prepare("INSERT INTO nonboursier (id_etudiant , addresse) VALUES (?,?)");
                $ter=$req->execute(array($id ,$etudiant->getAddresse()));
                var_dump($ter);
                 if($ter){
                    echo "bien inserer dans non boursier1!!!!!!";
                }
               else{
                   echo "erreur";
                }
            
            }
        }
        //inserer un etudiant boursier et loger
        $req1 = $bdd->query("SELECT MAX(id_etudiant) AS id FROM boursier");
        while(($der=$req1->fetch())){

        $id1=$der["id"];
        }
        
        if(get_class($etudiant) == "Loger"){
           $req2 = $bdd->prepare("SELECT id_chambre  FROM chambre WHERE chambre=:chambre");
        $idchambre = $req2->execute(array(':chambre' => $etudiant->getChambre()));
             while ($c = $req2->fetch()) {
           $idchambre = $c['id_chambre'];
           $req1=$bdd->prepare("INSERT INTO loger (id_etudiant,id_chambre) VALUES(?,?)");
           $test1=$req1->execute(array( $id1,$idchambre));
          if($test1){

           echo "bien inserer dans  boursier loger";

           } 
           else{
                   echo "erreur";
           
            }
        }
          
}
      

}
    
public function findALL(){
  $bdd=connexion();
    $find = "SELECT * FROM etudiants";
    $ter =$bdd->query($find);
     $ter->execute();
     return $ter;
}
     //liste des boursier
     public function findAlll(){
      $bdd=connexion();
     $find2="SELECT * FROM  etudiants,boursier,pension WHERE etudiants.id_etudiant=boursier.id_etudiant AND boursier.id_pension=pension.id_pension";
     $return1=$bdd->query($find2);
     $return1->execute();
     return $return1;
}

  //liste des boursier
  public function listesnonboursiers(){
  $bdd=connexion();
  $find3="SELECT * FROM etudiants,nonboursier WHERE etudiants.id_etudiant=nonboursier.id_etudiant";
  $return=$bdd->query($find3);
  $return->execute();
  return $return;

}

}


    



    











