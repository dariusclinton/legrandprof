<?php

namespace LGP\ReservationBundle\Cart;

/**
 * correspond a une entrée dans le panier c'est a dire un prof
 * booké ainsi que les informations nescessaires
 */
class Booker {

    private $profId;
    private $profNom;
    private $profPrenoms;
    private $profImage;
    private $coursId;
    private $classe;
    private $dateDebut;
    private $nombreApprenants;
    private $lieu;
    private $ville;
    private $quartier;
    private $prixTotal;
    
    function getProfId() {
        return $this->profId;
    }

    function getProfNom() {
        return $this->profNom;
    }

    function getProfPrenoms() {
        return $this->profPrenoms;
    }

    function getProfImage() {
        return $this->profImage;
    }

    function getCoursId() {
        return $this->coursId;
    }

    function getClasse() {
        return $this->classe;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getNombreApprenants() {
        return $this->nombreApprenants;
    }

    function getLieu() {
        return $this->lieu;
    }

    function getVille() {
        return $this->ville;
    }

    function getQuartier() {
        return $this->quartier;
    }

    function getPrixTotal() {
        return $this->prixTotal;
    }

    function setProfId($profId) {
        $this->profId = $profId;
    }

    function setProfNom($profNom) {
        $this->profNom = $profNom;
    }

    function setProfPrenoms($profPrenoms) {
        $this->profPrenoms = $profPrenoms;
    }

    function setProfImage($profImage) {
        $this->profImage = $profImage;
    }

    function setCoursId($coursId) {
        $this->coursId = $coursId;
    }

    function setClasse($classe) {
        $this->classe = $classe;
    }

    function setDateDebut($dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setNombreApprenants($nombreApprenants) {
        $this->nombreApprenants = $nombreApprenants;
    }

    function setLieu($lieu) {
        $this->lieu = $lieu;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setQuartier($quartier) {
        $this->quartier = $quartier;
    }

    function setPrixTotal($prixTotal) {
        $this->prixTotal = $prixTotal;
    }


}
