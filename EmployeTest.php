<?php

require_once "./classes/Employe.class.php";

use PHPUnit\Framework\TestCase;

class EmployeTest extends TestCase {
    
    public function anciennete(int $nbannees)
    {
        echo "Le salarié a une ancienneté de ".$nbannees." années.<br>";
    }

    public function prime(int $somme){
        $somme = (0.05 * $_salaire) + (0.02 * $_date);
        $jour = date('d-m-y');
echo "Le salarié reçoit la somme de" .$somme. "à la date du" .$jour ;
    }

    public function nombre(int $employe){
        $employe = new Employe;
        echo "L'entreprise comprend" .$employe. " employé";
    }

   public function empname(string $emp){
     $emp = array($_nom , $_prenom);
     asort($emp);
   }

   public function service(string $service){
       $service = array($_service , $_nom , $_prenom);
       asort($service);
   }

   public function prix(int $prix){
       $prix = $_salaire + $somme;
       echo "Les salariés coutent " .$prix. "euros";
   }
}

?>