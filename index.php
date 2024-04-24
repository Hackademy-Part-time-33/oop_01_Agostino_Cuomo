<?php 
 class Azienda {
    public $nome;
    public $location;
    public $tot_employees;
    public $avg_salary;
    public static $TotAziende=0;

    function __construct($nome, $location, $tot_employees, $avg_salary){
     $this->nome= $nome;
     $this->location = $location;
     $this->tot_employees=$tot_employees;
     $this->avg_salary=$avg_salary;
     self::$TotAziende++;
    }

    function console(){
        echo "L'Ufficio ".$this->nome." con sede in ".$this->location." ha questio numero di dipendenti ".$this->tot_employees." e lo stipendio è di ".$this->avg_salary." euro"."\n";
    }
    
    function spesa($mesi){
        $spesa=$this->avg_salary*$mesi;
        return "In ".$mesi." mesi la spesa dell'azienda ".$this->nome." è di ".$spesa."\n";
    }

    function console2($mesi){
         echo $this-> spesa($mesi);
    }

   public static function TotAziende(){
        echo "il numero di Aziende create è: ".self::$TotAziende."\n";
    }
 

}

$Azienda = new Azienda("Aulab", "Italia", 200, 1400);
$Azienda2 = new Azienda("Apple","Stati Uniti", 2000, 3000);
$Azienda3= new Azienda ("Samsung", "Corea del Sud", 3500, 3000);
$Azienda4= new Azienda("Fiat","Italia", 1400, 1600);
$Azienda5= new Azienda("BMW","Germania",5200, 4000);
echo $Azienda->console();
echo $Azienda2 ->console();
echo $Azienda3 ->console();
echo $Azienda4 ->console();
echo $Azienda5 ->console();


echo $Azienda5->console2(12);


 Azienda::TotAziende();



?>