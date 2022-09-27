<?php

class OeuvreEnVente extends oeuvre
{
    private string $etat;
    private float $prixOeuvre;

    /**
     * @param string $etat
     * @param float $prixOeuvre
     */
    public function __construct(float $tprixOeuvre, int $unnumero, string $untitre)
    {
        parent :: __construct($unnumero, $untitre);
        $this->etat = 'L';
        $this->prixOeuvre = $tprixOeuvre;
    }


    /**
     * @param string $etat
     */
    public function setLibre(): void
    {
        $this->etat = 'L';
    }

    /**
     * @param float $prixOeuvre
     */
    public function setReserve(): void
    {
        $this->etat = 'R';
    }

    /**
     * @return string
     */
    public function getEtat(): string
    {
        return $this->etat;
    }

    /**
     * @return float
     */
    public function getPrixOeuvre(): float
    {
        return $this->prixOeuvre;
    }

    /**
     * @param float $prixOeuvre
     */
    public function setPrixOeuvre(float $prixOeuvre): void
    {
        $this->prixOeuvre = $prixOeuvre;
    }



}