<?php

namespace LGP\ReservationBundle\Cart;

/**
 * correspond a une entrée dans le panier c'est a dire un prof
 * booker ainsi que les informations nescessaires
 */
class Booker {

    private $profId;
    private $profNom;
    private $profPrenoms;
    private $profImage;
    private $cours;
    private $classe;
    private $prixTotal;
    private $lieu;
    private $dateDebut;
    private $nbApprenants;
    private $nbHeureParJour;
    private $frequencePaiement;
    private $ville;
    private $quartier;
    private $jours;

    function __construct() {
        $this->jours = array();
    }

    public function getProfId() {
        return $this->profId;
    }

    public function getProfNom() {
        return $this->profNom;
    }

    public function getProfPrenoms() {
        return $this->profPrenoms;
    }
    public function getProfImage() {
        return $this->profImage;
    }

    public function setProfImage($profImage) {
        $this->profImage = $profImage;
    }

        public function setProfId($profId) {
        $this->profId = $profId;
    }

    public function setProfNom($profNom) {
        $this->profNom = $profNom;
    }

    public function setProfPrenoms($profPrenoms) {
        $this->profPrenoms = $profPrenoms;
    }

        public function getCours() {
        return $this->cours;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function getPrixTotal() {
        return $this->prixTotal;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function getDateDebut() {
        return $this->dateDebut;
    }

    public function getNbApprenants() {
        return $this->nbApprenants;
    }

    public function getNbHeureParJour() {
        return $this->nbHeureParJour;
    }

    public function getFrequencePaiement() {
        return $this->frequencePaiement;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getQuartier() {
        return $this->quartier;
    }

    public function getJours() {
        return $this->jours;
    }

    public function setCours($cours) {
        $this->cours = $cours;
    }

    public function setClasse($classe) {
        $this->classe = $classe;
    }

    public function setPrixTotal($prixTotal) {
        $this->prixTotal = $prixTotal;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    public function setNbApprenants($nbApprenants) {
        $this->nbApprenants = $nbApprenants;
    }

    public function setNbHeureParJour($nbHeureParJour) {
        $this->nbHeureParJour = $nbHeureParJour;
    }

    public function setFrequencePaiement($frequencePaiement) {
        $this->frequencePaiement = $frequencePaiement;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function setQuartier($quartier) {
        $this->quartier = $quartier;
    }

    public function addJour($jour) {
        $this->jours[] = $jour;
    }

    public function removeJour($jour) {
        if (in_array($jour, $this->jours)) {
            unset($this->jours[array_search($jour, $this->jours)]);
        }
    }

}
