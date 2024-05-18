<?php


require_once ("Model.php");

class ModelUsers extends Model{
            private $idUser;
            private $image 	;
            private $userName;
            private $emailAddress;
            private $creationDate;
            private $role;
            private $accountStatus;
            private $password;
            private $expirationDate;

    protected static $table = 'Users';
    protected static $primary = 'idUser';

    /**
     * @param $idUser
     * @param $image
     * @param $userName
     * @param $emailAddress
     * @param $creationDate
     * @param $role
     * @param $accountStatus
     * @param $password
     * @param $expirationDate
     */
    public function __construct($idUser=NULL, $image=NULL, $userName=NULL, $emailAddress=NULL, $creationDate=NULL,
                                $role=NULL, $accountStatus=NULL, $password=NULL, $expirationDate=NULL)
    {
        if (!is_null($idUser) && !is_null($image) && !is_null($userName) && !is_null($emailAddress) && !is_null($creationDate)
            && !is_null($role) && !is_null($accountStatus) && !is_null($password) && !is_null($expirationDate)) {

            $this->idUser = $idUser;
            $this->image = $image;
            $this->userName = $userName;
            $this->emailAddress = $emailAddress;
            $this->creationDate = $creationDate;
            $this->role = $role;
            $this->accountStatus = $accountStatus;
            $this->password = $password;
            $this->expirationDate = $expirationDate;
        }
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
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
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return mixed
     */
    public function getAccountStatus()
    {
        return $this->accountStatus;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }


}
?>