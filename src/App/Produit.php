<?php
/**
 *  @class Produit
 */
class Produit{

  protected $id;
  protected $titre;
  protected $resume;
  protected $quantite;
  protected $prix;
  protected $taxe;
  protected $couleurs=[];
  protected $accessoires=[];

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Titre
     *
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of Titre
     *
     * @param mixed titre
     *
     * @return self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of Resume
     *
     * @return mixed
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of Resume
     *
     * @param mixed resume
     *
     * @return self
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of Quantite
     *
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set the value of Quantite
     *
     * @param mixed quantite
     *
     * @return self
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get the value of Prix
     *
     * @return mixed
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of Prix
     *
     * @param mixed prix
     *
     * @return self
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of Taxe
     *
     * @return mixed
     */
    public function getTaxe()
    {
        return $this->taxe;
    }

    /**
     * Set the value of Taxe
     *
     * @param mixed taxe
     *
     * @return self
     */
    public function setTaxe($taxe)
    {
        $this->taxe = $taxe;

        return $this;
    }

    /**
     * Get the value of Couleurs
     *
     * @return mixed
     */
    public function getCouleurs()
    {
        return $this->couleurs;
    }

    /**
     * Set the value of Couleurs
     *
     * @param mixed couleur
     *
     * @return self
     */
    public function setCouleurs($couleurs)
    {
        $this->couleurs = $couleurs;

        return $this;
    }
    /**
     * Get the value of Accessoires
     *
     * @return mixed
     */
    public function getAccessoires()
    {
        return $this->accessoires;
    }

    /**
     * Set the value of Accessoires
     *
     * @param mixed couleur
     *
     * @return self
     */
    public function setAccessoires($accessoires)
    {
        $this->accessoires = $accessoires;

        return $this;
    }

    public function presentation(){
      return '<div class="jumbotron"><h1>'.$this->titre.'</h1>  <p>'.$this->resume.'</p><p><a class="btn btn-success btn-lg" href="#" role="button">'.$this->prix.'</a></p>';
    }

    public function ajouterAccessoire($article){
      if(!is_null($article)){
        if(is_array($article)){

          $this->$accessoires = array_merge($this->$accessoires, $article);
        }
        else{

          $this->$accessoires[]= $article;
        }
      }
    }

  





} //END @class PRODUIT





 ?>
