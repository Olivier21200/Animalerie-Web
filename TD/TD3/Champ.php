<?php
    
    declare(strict_types=1);
    require_once("Forum.php");
class Champ
{
    private  $name;
    private  $type;
    private  $label;
    private  $value;

    public function __construct( $label,  $name,  $type,  $value)
    {
        $this->name = $name;
        $this->label = $label;
        $this->type = $type;
        $this->value = "";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getLabel()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }
    
    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        echo"<label for=".$this->getLabel().">".$this->getLabel()."</label> 
             <input type=".$this->getType()." name=".$this->getName()." value= \" " .$this->getValue(). "\" >";
        
    }

} 

?>