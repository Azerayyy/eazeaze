<?php

class OeuvrePretee extends oeuvre
{
    private string $nomProprietaire;

    /**
     * @param string $nomProprietaire
     */
    public function __construct(string $wnomPropietaire, int $wnumeroOeuvre, string $wtitreOeuvre)
    {
        parent :: __construct($wnumeroOeuvre, $wtitreOeuvre);
        $this->nomPropietaire = $wnomPropietaire;
    }

}