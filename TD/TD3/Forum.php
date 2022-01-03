<?php 
    declare(strict_types=1);

    require_once("Champ.php");

    class Forum
    {
        private array $champs = array();
        private string $action;

        public function __construct(string $action)
        {
            $this->action = $action;
        }

        public function getChamps()
        {
            return $this->champs;
        }

        public function getAction()
        {
            return $this->action;
        }

        public function setChamps(Champ $champs)
        {
            $this->champs = $champs;
        }

        public function setaction(string $action)
        {
            $this->action = $action;
        }

        public function __toString()
        {
            echo"<form action=".$this->getAction().".php". "method=\"post\"> ";

            foreach($this->getChamps() as $valeur)
            {
                echo $valeur->__toString()."<br>";
            }

            echo"<button type=\"submit\"> Submit</button></form>";
        }

        public function __add(Champ $champs)
        {
            $this->champs[] = $champs;
        }

        public function hydrate(array $donnees) 
        {
            foreach($this->champs as $valeurchamp)
            {
                foreach($donnees as $valeurdata)
                {
                    $valeurchamp->setValue($valeurdata);
                }
            }
            
        }

        public function __toStringResultat() 
        {
            foreach($this->champs as $valeurchamp)
            {
                echo" ".$valeurchamp->getName()." => ".$valeurchamp->getValue() ;
            }

        }


    }
?>