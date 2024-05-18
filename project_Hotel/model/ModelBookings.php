<?php

require_once ("Model.php");

class ModelBookings extends Model{
        private $code;
        private $roomId ;
        private $checkIn;
        private $checkOut;
        private $firstName;
        private $lastName;
        private $email;
        private $phone;
        private $totalPrice;
        private $status;

    protected static $table = 'Bookings';
    protected static $primary = 'code';

    /**
     * @param $code
     * @param $room
     * @param $checkIn
     * @param $checkOut
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $phone
     * @param $totalPrice
     * @param $status
     */
    public function __construct($code= NULL, $roomId= NULL, $checkIn= NULL, $checkOut= NULL, $firstName= NULL, $lastName= NULL
        , $email= NULL, $phone= NULL, $totalPrice= NULL, $status= NULL)
    {
        if (!is_null($code) && !is_null($roomId) && !is_null($checkIn) && !is_null($checkOut) && !is_null($firstName)
            && !is_null($lastName) && !is_null($email) && !is_null($phone) && !is_null($totalPrice) && !is_null($status)) {
            $this->code = $code;
            $this->roomId = $roomId;
            $this->checkIn = $checkIn;
            $this->checkOut = $checkOut;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->phone = $phone;
            $this->totalPrice = $totalPrice;
            $this->status = $status;
        }
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * @return mixed
     */
    public function getCheckIn()
    {
        return $this->checkIn;
    }

    /**
     * @return mixed
     */
    public function getCheckOut()
    {
        return $this->checkOut;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
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
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }


}

?>