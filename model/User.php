<?php
Class User{
    private $userEmail;
    private $userPwd;
    private $userRole;
    private $userName;
    private $userAddress;
    private $userPhone;
    
    
    function __construct($userEmail,$userPwd){
        $this->userEmail = $userEmail;
        $this->userPwd = $userPwd;
    }
    
    
    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @return mixed
     */
    public function getUserPwd()
    {
        return $this->userPwd;
    }

    /**
     * @return mixed
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return mixed
     */
    public function getUserAddress()
    {
        return $this->userAddress;
    }

    /**
     * @return mixed
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @param mixed $userPwd
     */
    public function setUserPwd($userPwd)
    {
        $this->userPwd = $userPwd;
    }

    /**
     * @param mixed $userRole
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @param mixed $userAddress
     */
    public function setUserAddress($userAddress)
    {
        $this->userAddress = $userAddress;
    }

    /**
     * @param mixed $userPhone
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;
    }

    
    
    
}
?>