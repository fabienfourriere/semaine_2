<?php

    class Agence {
        public $_nomagence;
        public $_adresse;
        public $_codepostal;
        public $_ville;
        public $_restauration;
    }
    $amiens = new Agence();
    
    $amiens->nomagence = 'Picardie';
    $amiens->adresse = '17 Rue de Poulainville';
    $amiens->codepostal = '80000';
    $amiens->ville = 'Amiens';
    $amiens->restauration = 'Oui';

    $lille = new Agence();
    
    $lille->nomagence = 'Hauts de France';
    $lille->adresse = '34 Rue des Bouchers';
    $lille->codepostal = '62000';
    $lille->ville = 'Lille';
    $lille->restauration = 'Non';

?>