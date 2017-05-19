<?php
   class ClLogin{
	private $id_login;  
    private $id_persona;
    private $username;
    private $userpass;

    function ClLogin($id_login,$id_persona,$username,$userpass){
	   $this->setIdLogin($id_login);
       $this->setIdPersona($id_persona);
       $this->setUsername($username);
       $this->setUserpass($userpass);
    }
     public function setIdLogin($id_login){
        $this->id_login=$id_login;
    }
    public function getIdLogin(){
        return $this->id_login;
    }
    public function setIdPersona($id_persona){
        $this->id_persona=$id_persona;
    }
    public function getIdPersona(){
        return $this->id_persona;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setUserpass($userpass){
        $this->userpass=$userpass;
    }
    public function getUserpass(){
        return $this->userpass;
    }
   }
?>
