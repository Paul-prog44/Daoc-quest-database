<?php

class Realm {
    private $name;

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    //Permet d'hydrater l'objet
    public function hydrate(array $data) : void
    {
        foreach ($data as $key => $value ) 
        {
            $method = "set".ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}