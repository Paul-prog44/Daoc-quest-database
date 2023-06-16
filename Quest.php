<?php

class Quest {
    private $quest_id;
    private $name;
    private $minimum_level;
    private $maximum_level;
    private $number_players;
    private $starting_area;
    private $starting_npc;
    private $reward;
    private $realm;
    private $user_id;


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
     * Get the value of quest_id
     */ 
    public function getquest_id()
    {
        return $this->quest_id;
    }

    /**
     * Set the value of quest_id
     *
     * @return  self
     */ 
    public function setquest_id($quest_id)
    {
        $this->quest_id = $quest_id;

        return $this;
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

    /**
     * Get the value of minimumLevel
     */ 
    public function getminimum_level()
    {
        return $this->minimum_level;
    }

    /**
     * Set the value of minimumLevel
     *
     * @return  self
     */ 
    public function setminimum_level($minimum_level)
    {
        $this->minimum_level = $minimum_level;

        return $this;
    }

    /**
     * Get the value of user_id
     */ 
    public function getuser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setuser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of maximum_level
     */ 
    public function getmaximum_level()
    {
        return $this->maximum_level;
    }

    /**
     * Set the value of maximum_level
     *
     * @return  self
     */ 
    public function setmaximum_level($maximum_level)
    {
        $this->maximum_level = $maximum_level;

        return $this;
    }

    /**
     * Get the value of number_players
     */ 
    public function getnumber_players()
    {
        return $this->number_players;
    }

    /**
     * Set the value of number_players
     *
     * @return  self
     */ 
    public function setnumber_players($number_players)
    {
        $this->number_players = $number_players;

        return $this;
    }

    /**
     * Get the value of starting_area
     */ 
    public function getstarting_area()
    {
        return $this->starting_area;
    }

    /**
     * Set the value of starting_area
     *
     * @return  self
     */ 
    public function setstarting_area($starting_area)
    {
        $this->starting_area = $starting_area;

        return $this;
    }

    /**
     * Get the value of starting_npc
     */ 
    public function getstarting_npc()
    {
        return $this->starting_npc;
    }

    /**
     * Set the value of starting_npc
     *
     * @return  self
     */ 
    public function setstarting_npc($starting_npc)
    {
        $this->starting_npc = $starting_npc;

        return $this;
    }

    /**
     * Get the value of reward
     */ 
    public function getReward()
    {
        return $this->reward;
    }

    /**
     * Set the value of reward
     *
     * @return  self
     */ 
    public function setReward($reward)
    {
        $this->reward = $reward;

        return $this;
    }

    /**
     * Get the value of realm
     */ 
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * Set the value of realm
     *
     * @return  self
     */ 
    public function setRealm($realm)
    {
        $this->realm = $realm;

        return $this;
    }
}