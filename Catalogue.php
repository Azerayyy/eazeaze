<?php

include_once ('OeuvreEnVente.php');
include_once ('oeuvre.php');

class Catalogue
{
 private array $lesOeuvres;

    /**
     *
     */

    public function __construct()
    {
        $this->lesOeuvres = array();
    }

    public function consulter(OeuvreEnVente $uneOeuvre): String
    {
        if (in_array($uneOeuvre, $this->lesOeuvres) != false)
        {
            $i = array_search($uneOeuvre, $this->lesOeuvres);
            $titre = $this->lesOeuvres[$i]->getTitreOeuvre();
            $etat = $this->lesOeuvres[$i]->getEtat();
            $Oeuvre = $titre. " - " .$etat;
        }
        else
        {
           $Oeuvre = "";
        }
        return $Oeuvre;
    }

    public function ajouter(OeuvreEnVente $uneOeuvre): Boolean
    {
        if (array_search($uneOeuvre, $this->lesOeuvres) == false)
        {

            $biencree = true;

        }
        else
        {
            $biencree = false;
        }
        return $biencree;
    }

    public function retirer(OeuvreEnVente $uneOeuvre): Boolean
    {
        if (array_search($uneOeuvre, $this->lesOeuvres) == array([$this->lesOeuvres, $uneOeuvre]))
        {
        $key = array_search($uneOeuvre, $this->lesOeuvres);
        unset($this->lesOeuvres[$key]);
        $bienretiree = true;
        }
        else
        {
            $bienretiree = false;
        }
        return $bienretiree;
    }

    public function reserver(): Boolean
    {
        $rep = false;
        if(in_array($uneOeuvre,$this->lesOeuvres))
        {
            $uneOeuvre->setReserve();
            $rep = true;
        }
        return $rep;
    }

    public function reserverNumero(): Boolean
    {
        $rep = false;
        if($unNumOeuvre()>=0 && $unNumOeuvre<= (count($this->lesOeuvres)-1))
        {
            $this->lesOeuvres[$unNumOeuvre]->setReserve();
            $rep = true;
        }
        return $rep;
    }

    public function listeLibre(): OeuvreEnVente
    {
        $ListeOeuvre = array();
        foreach ($this->lesOeuvres as $uneOeuvre)
        {
            $trouve = array_search($uneOeuvre,$this->lesOeuvres);
            if($trouve >= 0)
            {
                $listeoeuvre[] = $this->lesOeuvres[$trouve];
            }
        }

        return $this->lesOeuvres;
    }

}