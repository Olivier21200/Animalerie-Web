<?php
    require_once "Champ.php";

class Form
{

    private $champs;
    private $action;

    public function __construct(string $action)
    {
        $this->action = $action;
        $this->champs = [];
    }

    public function __toString():string
    {
        $res = "<form action='".$this->action."' method='post'>";

        foreach($this->champs as $champ)
        {
            $res .= $champ->__toString() . "<br>";
        }
        return $res;
    }

    public function add(Champ $champ)
    {
        $this->champs[] = $champ;
    }

    public function hydrate(array $donnees)
    {
        foreach($donnees as $key => $value)
        {
            $champ = new Champ($key, $key, "text", $value);
            $this->add($champ);
        }
    }

    public function __toStringResultat():string
    {
        $res ="";

        foreach($this->champs as $champ)
        {
            $res .= $champ->getName() . " => " . $champ->getValue() . "<br>";
        }

        return $res;
    }

}