<?php

/*
* 1 fichier = 1 classe / nom du fichier = nom de la classe
* @class Humain
*/
class Humain {

  /**
  * Attributs de classe
  * @var Couleur des yeux
  */
  protected $couleursYeux;

  /**
  * @var Couleur des cheveux
  */
  protected $couleursCheveux;

  /**
  * @var Taille
  */
  protected $taille;

  /**
  * @var Poid
  */
  protected $poid;

  /**
   * Attribut langue avec paramétrage par défaut
   */
   protected $langue = "Chinois";

   /**
    * Niveau de la langue
    */
  protected $niveauLangue = 1;

  /**
 *  Attribut Nom
 */
protected $nom;

  /**
 *  Attribut prénom
 */
protected $prenom;

/**
 * Attribut SMS
 */
protected $smsSend = [];
/**
 * Attribut SMS
 */
protected $smsReceived = [];
/**
 * Attribut SMS
 */
protected $smsHacked = [];





/*-----------------------------GETTER & SETTER-------------------------------------*/
  /**
  * Getter
  * Retourne la couleur des yeux de mon objet courrant
  * $this = objet courrant
  */
  public function getCouleursYeux(){
    return $this->couleursYeux;
  }

  /**
  * Setter
  * Modifie la couleur des yeux de mon objet courrant
  */
  public function setCouleursYeux($couleur){
    $this->couleursYeux = $couleur;
  }


  /**
  * Getter
  * Retourne la couleur des cheveux de mon objet courrant
  * $this = objet courrant
  */
  public function getCouleursCheveux(){
    return $this->couleursCheveux;
  }

  /**
  * Setter
  * Modifie la couleur des cheveux de mon objet courrant
  */
  public function setCouleursCheveux($couleur){
    $this->couleursCheveux = $couleur;
  }
  /**
  * Getter
  * Retourne la taille de mon objet courrant
  * $this = objet courrant
  */
  public function getTaille(){
    return $this->taille;
  }

  /**
  * Setter
  * Modifie la taille de mon objet courrant
  */
  public function setTaille($valeur){
    $this->taille = $valeur;
  }
  /**
  * Getter
  * Retourne ls poid de mon objet courrant
  * $this = objet courrant
  */
  public function getPoid(){
    return $this->poid;
  }

  /**
  * Setter
  * Modifie le poid de mon objet courrant
  */
  public function setPoid($valeur){
    $this->poid = $valeur;
  }
  /**
  * Getter
  * Retourne ls poid de mon objet courrant
  * $this = objet courrant
  */
  public function getLangue(){
    return $this->langue;
  }

  /**
  * Setter
  * Modifie le poid de mon objet courrant
  */
  public function setLangue($valeur){
    $this->niveauLangue++;
    $this->langue = $valeur;
  }

  /**
  * Getter
  * Retourne ls poid de mon objet courrant
  * $this = objet courrant
  */
  public function getNiveauLangue(){
    return $this->niveauLangue;
  }

  /**
  * Getter
  * Retourne ls poid de mon objet courrant
  * $this = objet courrant
  */
  public function getNom(){
    return $this->nom;
  }

  /**
  * Setter
  * Modifie le poid de mon objet courrant
  */
  public function setNom($valeur){
    $this->nom = $valeur;
  }
  /**
  * Getter
  * Retourne ls poid de mon objet courrant
  * $this = objet courrant
  */
  public function getPrenom(){
    return $this->prenom;
  }

  /**
  * Setter
  * Modifie le poid de mon objet courrant
  */
  public function setPrenom($valeur){
    $this->niveauLangue++;
    $this->prenom = $valeur;
  }
  /**
  * Getter SMS Send
  * Retourne la couleur des yeux de mon objet courrant
  * $this = objet courrant
  */
  public function getSmsSend(){
    return $this->smsSend;
  }

  /**
  * Setter SMS Send
  * Modifie la couleur des yeux de mon objet courrant
  */
  public function setSmsSend($valeur){
    $this->smsSend[]= $valeur;
  }
  /**
  * Getter SMS Received
  * Retourne la couleur des yeux de mon objet courrant
  * $this = objet courrant
  */
  public function getSmsReceived(){
    return $this->smsReceived;
  }

  /**
  * Setter SMS Received
  * Modifie la couleur des yeux de mon objet courrant
  */
  public function setSmsReceived($valeur){
    $this->smsReceived[]= $valeur;
  }
  /**
  * Getter SMS Hacked
  * Retourne la couleur des yeux de mon objet courrant
  * $this = objet courrant
  */
  public function getSmsHacked(){
    return $this->smsHacked;
  }

  /**
  * Setter SMS Hacked
  * Modifie la couleur des yeux de mon objet courrant
  */
  public function setSmsHacked($valeur){
    $this->smsHacked[]= $valeur;
  }

  /**
  *   ------METHODE------
  *   Parler
  */
  public function parler(Humain $auditeur = null, $fort = false){
    if ($auditeur === null) {
      if($fort === true){
        return $this->prenom." ".$this->nom." parle  le ".$this->langue." et il parle fort. Il est niveau ".$this->niveauLangue;
      }
      else{
        return $this->prenom." ".$this->nom." parle le ".$this->langue.". Il est niveau ".$this->niveauLangue;
      }
    }else{
      if($fort === true){
        return $this->prenom." ".$this->nom." parle  le ".$this->langue." à ".$auditeur->prenom." ".$auditeur->nom." et il parle fort. Il est niveau ".$this->niveauLangue;
      }
      else{
        return $this->prenom." ".$this->nom." parle le ".$this->langue." à ".$auditeur.". Il est niveau ".$this->niveauLangue;
      }
    }
  }


  /**
  * ------------METHODE-----------------
  * Ecrire
  */
  public function ecrire(Humain $dest = null, $valeur = null){
    if($dest){
      if(is_array($value)){
        foreach($value as $val){
          $this->smsSend[]=$val;
          $dest->setSmsReceived($val." (".$this->prenom." ".$this->nom.")");
        }
      }
      $this->smsSend[]=$valeur;
      $dest->setSmsReceived($valeur." (".$this->prenom." ".$this->nom.")");
    }
  }

  public function displaySMS(){

    $smsStored = [];

    if(count($this->smsSend)>0){

      $smsStored[] = "sms envoyé : ";

      if(is_array($this->smsSend)){

        $smsStored = array_merge($smsStored, $this->smsSend);

      }else{

        $smsStored[]= $this->smsSend;
      }
    }
    else{
      $smsStored[] = "pas de sms envoyé ";
    }
    if(count($this->smsReceived)>0){

      $smsStored[]= "sms reçus :";

      if(is_array($this->smsReceived)){

        $smsStored = array_merge($smsStored, $this->smsReceived);

      }
      else{
        $smsStored []= $this->smsReceived;
      }
    }
    else{
      $smsStored[]= "pas de SMS reçus";
    }

    $smsStored = implode("</br>", $smsStored);

      return $smsStored;
  }

  public function hackSMS(Humain $prop){
    $count = 0;
    $this->smsHacked = [];
    if (is_array($prop->getSmsSend())) {
      $this->smsHacked = array_merge($this->smsHacked, $prop->getSmsSend());
    }else{
      $this->smsHacked[]= $prop->getSmsSend();
    }
    if(is_array($prop->getSmsReceived())){
      $this->smsHacked = array_merge($this->smsHacked, $prop->getSmsReceived());
    }else{
      $this->smsHacked[]= $prop->getSmsReceived();
    }
    $count = count($this->smsHacked);

    $this->smsHacked[]="Propriétaire : ".$prop->getNom()." ".$prop->getPrenom();
    $this->smsHacked[]="Nombre de sms hackés : ".$count;

    $this->smsHacked = implode("</br>", $this->smsHacked);
  }

  public function delSmsSend($id){
    if(is_array($id)){
      $this->smsSend = array_diff_key($this->smsSend, array_flip($id));
    }
    else{
      array_splice($this->smsSend, $id, 1);
    }
  }

  public function delSmsReceived($id){
    if(is_array($id)){
      $this->smsReceived = array_diff_key($this->smsReceived, array_flip($id));
    }
    else{
      array_splice($this->smsReceived, $id, 1);
    }
  }



  public function modifQtyPrix(Humain $personne, $qty = null, $prix = null){
    if($qty && $prix){

    }
  }

}//END OF HUMAN



?>
