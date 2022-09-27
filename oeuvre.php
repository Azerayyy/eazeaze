<?php

class oeuvre
{
    private int $numeroOeuvre;
    private string $titreOeuvre;

    /**
     * @param int $unnumero
     * @param string $untitre
     */
    public function __construct(int $unnumero, string $untitre)
    {
        $this->numeroOeuvre = $unnumero;
        $this->titreOeuvre = $untitre;
    }

    /**
     * @return int
     */
    public function getNumeroOeuvre(): int
    {
        return $this->numeroOeuvre;
    }

    /**
     * @return string
     */
    public function getTitreOeuvre(): string
    {
        return $this->titreOeuvre;
    }

    /**
     * @param int $numeroOeuvre
     */
    public function setNumeroOeuvre(int $numeroOeuvre): void
    {
        $this->numeroOeuvre = $numeroOeuvre;
    }

    /**
     * @param string $titreOeuvre
     */
    public function setTitreOeuvre(string $titreOeuvre): void
    {
        $this->titreOeuvre = $titreOeuvre;
    }



}