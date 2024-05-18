<?php
require_once ("Model.php");
class ModelClients extends Model
{

private $id ;
private  $firstname;
private $lastname;
private $date ;
private $email ;
private $phone ;
private $country ;
private  $zipCode;
private $city ;
private $password;
    protected static $table = 'Clients';
    protected static $primary = 'id';

    /**
     * @param $id
     * @param $firstname
     * @param $lastname
     * @param $date
     * @param $email
     * @param $phone
     * @param $country
     * @param $zipCode
     * @param $city
     * @param $password
     */
    public function __construct($id=null, $firstname=null, $lastname=null, $date=null, $email=null, $phone=null, $country=null, $zipCode=null,
                                $city=null, $password=null)
    {
        if (!is_null($id) && !is_null($firstname) && !is_null($lastname) && !is_null($date) && !is_null($email)
            && !is_null($country) && !is_null($zipCode) && !is_null($phone) && !is_null($city) && !is_null($password)) {
            $this->id = $id;
            $this->firstname = $firstname;
            $this->lastname = $lastname;
            $this->date = $date;
            $this->email = $email;
            $this->phone = $phone;
            $this->country = $country;
            $this->zipCode = $zipCode;
            $this->city = $city;
            $this->password = $password;
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }




}