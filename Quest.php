<?php

class Quest {
    private $questId;
    private $name;
    private $minimumLevel;
    private $maximumLevel;
    private $numberPlayers;
    private $startingArea;
    private $startingNpc;
    private $reward;
    private $realm;
    private $userId;


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
     * Get the value of questId
     */ 
    public function getQuestId()
    {
        return $this->questId;
    }

    /**
     * Set the value of questId
     *
     * @return  self
     */ 
    public function setQuestId($questId)
    {
        $this->questId = $questId;

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
    public function getMinimumLevel()
    {
        return $this->minimumLevel;
    }

    /**
     * Set the value of minimumLevel
     *
     * @return  self
     */ 
    public function setMinimumLevel($minimumLevel)
    {
        $this->minimumLevel = $minimumLevel;

        return $this;
    }

    /**
     * Get the value of userId
     */ 
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */ 
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of maximumLevel
     */ 
    public function getMaximumLevel()
    {
        return $this->maximumLevel;
    }

    /**
     * Set the value of maximumLevel
     *
     * @return  self
     */ 
    public function setMaximumLevel($maximumLevel)
    {
        $this->maximumLevel = $maximumLevel;

        return $this;
    }

    /**
     * Get the value of numberPlayers
     */ 
    public function getNumberPlayers()
    {
        return $this->numberPlayers;
    }

    /**
     * Set the value of numberPlayers
     *
     * @return  self
     */ 
    public function setNumberPlayers($numberPlayers)
    {
        $this->numberPlayers = $numberPlayers;

        return $this;
    }

    /**
     * Get the value of startingArea
     */ 
    public function getStartingArea()
    {
        return $this->startingArea;
    }

    /**
     * Set the value of startingArea
     *
     * @return  self
     */ 
    public function setStartingArea($startingArea)
    {
        $this->startingArea = $startingArea;

        return $this;
    }

    /**
     * Get the value of startingNpc
     */ 
    public function getStartingNpc()
    {
        return $this->startingNpc;
    }

    /**
     * Set the value of startingNpc
     *
     * @return  self
     */ 
    public function setStartingNpc($startingNpc)
    {
        $this->startingNpc = $startingNpc;

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