<?php
require_once("Model.php");
class ModelPayments extends Model {


    private $CardID;
    private $UserID;
    private $FirstName;
    private $LastName;
    private $Country;
    private $Email;
    private $City;
    private $Zip;
    private $Balance;
    private $CardNumber;
    private $CardName;
    private $CardType;
    private $Expiration;
    private $CVV;

    protected static $table = 'Payments';
    protected static $primary = 'CardID';





    /**
     * @param $CardID
     * @param $UserID
     * @param $FirstName
     * @param $LastName
     * @param $Country
     * @param $Email
     * @param $City
     * @param $Zip
     * @param $Balance
     * @param $CardNumber
     * @param $CardName
     * @param $CardType
     * @param $Expiration
     * @param $CVV
     */
    public function __construct($CardID=null, $UserID=null, $FirstName=null, $LastName=null, $Country=null, $Email=null, $City=null, $Zip=null,
                                $Balance=null, $CardNumber=null, $CardName=null, $CardType=null, $Expiration=null, $CVV=null)
    {
        if (!is_null($CardID) && !is_null($UserID) && !is_null($FirstName) && !is_null($LastName) && !is_null($Country) && !is_null($Email) && !is_null($City)
            && !is_null($Zip) && !is_null($Balance) && !is_null($CardName) && !is_null($CardName) && !is_null($CardType) && !is_null($Expiration) && !is_null($CVV)) {
            $this->CardID = $CardID;
            $this->UserID = $UserID;
            $this->FirstName = $FirstName;
            $this->LastName = $LastName;
            $this->Country = $Country;
            $this->Email = $Email;
            $this->City = $City;
            $this->Zip = $Zip;
            $this->Balance = $Balance;
            $this->CardNumber = $CardNumber;
            $this->CardName = $CardName;
            $this->CardType = $CardType;
            $this->Expiration = $Expiration;
            $this->CVV = $CVV;
        }
    }

    /**
     * @return mixed
     */
    public function getCardID()
    {
        return $this->CardID;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @return mixed
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * @return mixed
     */
    public function getBalance()
    {
        return $this->Balance;
    }

    /**
     * @return mixed|null
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @return mixed
     */
    public function getCardName()
    {
        return $this->CardName;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->CardType;
    }

    /**
     * @return mixed
     */
    public function getExpiration()
    {
        return $this->Expiration;
    }

    /**
     * @return mixed
     */
    public function getCVV()
    {
        return $this->CVV;
    }




}


