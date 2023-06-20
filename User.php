<?php

class USER {
    private string $login;
    private string $email;
    private string $password;
    private array $roles = [];

    

    /**
     * Get the value of roles
     */ 
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set the value of roles
     *
     * @return  self
     */ 
    public function setRoles($roles)
    {
        $this->roles[] = $roles;

        return $this;
    }
}