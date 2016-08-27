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
    private $coursId;
    private $classe;
    private $duree;
    private $nombreHeure;
    private $dateDebut;
    private $nombreApprenants;
    private $jours;
    private $lieu;
    private $ville;
    private $quartier;
    private $prixTotal;

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

    public function getJours() {
        return $this->jours;
    }

    public function getCoursId() {
        return $this->coursId;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function getDuree() {
        return $this->duree;
    }

    public function getNombreHeure() {
        return $this->nombreHeure;
    }

    public function getDateDebut() {
        return $this->dateDebut;
    }

    public function getNombreApprenants() {
        return $this->nombreApprenants;
    }

    public function getLieu() {
        return $this->lieu;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getQuartier() {
        return $this->quartier;
    }

    public function getPrixTotal() {
        return $this->prixTotal;
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

    public function setProfImage($profImage) {
        $this->profImage = $profImage;
    }

    public function setCoursId($coursId) {
        $this->coursId = $coursId;
    }

    public function setClasse($classe) {
        $this->classe = $classe;
    }

    public function setDuree($duree) {
        $this->duree = $duree;
    }

    public function setNombreHeure($nombreHeure) {
        $this->nombreHeure = $nombreHeure;
    }

    public function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    public function setNombreApprenants($nombreApprenants) {
        $this->nombreApprenants = $nombreApprenants;
    }

    public function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function setQuartier($quartier) {
        $this->quartier = $quartier;
    }

    public function setPrixTotal($prixTotal) {
        $this->prixTotal = $prixTotal;
    }

    public function addJour($jour, $heure) {
        $this->jours[$jour] = $heure;
    }

    public function removeJour($jour) {
        unset($this->jours[$jour]);
    }

}
