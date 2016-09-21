<?php

namespace LGP\ReservationBundle\Cart;

/**
 * correspond a un panier
 */
class Cart {

    /**
     * correspond a un ensemble d'elements dans le panier
     * @var type array()
     */
    private $items;

    /**
     * initialisation du panier lors de la construction
     */
    function __construct() {
        $this->items = array();
    }

    /**
     * retourne l'ensemble des elements du panier (la liste des profs choisi par le parent)
     * @return type array()
     */
    public function getItems() {
        return $this->items;
    }

    /**
     * retourne un element du panier (un prof)
     * @param type $key
     * @return type array()11
     * @throws KeyInvalidException
     */
    public function getItem($key) {
        if ($this->keyExists($key)) {
            return $this->items[$key];
        } else {
            throw new KeyInvalidException("la clé $key est erronée.");
        }
    }

    /**
     * ajoute un element au panier (un prof)
     * @param type $key
     * @param type $item
     * @return type
     * @throws KeyHasUseException
     */
    public function addItem($item) {
        $this->items[] = $item;
        return $this->items;
    }

    /**
     * retire un prof du panier
     * @param type $key
     * @return type
     * @throws KeyInvalidException
     */
    public function removeItem($key) {
        if ($this->keyExists($key)) {
            unset($this->items[$key]);
        } else {
            throw new KeyInvalidException("la clé est $key erronée .");
        }
        return $this->items;
    }

    /**
     * retourne le nombre de profs dans le panier
     * @return type
     */
    public function length() {
        return count($this->items);
    }

    /**
     * retourne toutes les cles du panier (à definir prof_id ou autre)
     * @return type
     */
    public function allKeys() {
        return array_keys($this->items);
    }

    /**
     * @param type $key
     * @return type boolean
     */
    public function keyExists($key) {
        return isset($this->items[$key]);
    }

}
