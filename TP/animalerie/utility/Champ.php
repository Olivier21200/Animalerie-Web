<?php

class Champ
{

    private $name;
    private $type;
    private $value;
    private $label;

    //Constructeur du champ
    public function __construct(string $label, string $name, string $type, string $value="")
    {
        $this->name = $name;
        $this->type = $type;
        $this->value = $value;
        $this->label = $label;
    }

    public function __toString():string
    {
        return "
        <label for='" . $this->name . "'>" . $this->label . "</label>
        <input class=\"form-control\" type='" . $this->type . "' name='" . $this->name . "' value='" . $this->value .  "' />
        ";
    }

    //Setter de la valeur du champ
    public function setValue(string $value)
    {
        $this->value = $value;
    }

    //Getter de la valeur du champ
    public function getValue():string
    {
        return $this->value;
    }

    //Getter du nom du champ
    public function getName():string
    {
        return $this->name;
    }

}