<?php


require_once ("Model.php");

class ModelRooms extends Model{
    private $roomId;
    private $images;
    private $nameRoom;
    private $area;
    private $description;
    private $maxPersons;
    private $maxChildren;
    private $priceNight;
    private $status ;
    private $numberRooms;
    private $roomFacilities;

    protected static $table = 'Rooms';

    protected static $primary = 'roomId';

    /**
     * @param $roomId
     * @param $images
     * @param $nameRoom
     * @param $area
     * @param $description
     * @param $maxPersons
     * @param $maxChildren
     * @param $priceNight
     * @param $status
     * @param $numberRooms
     * @param $roomFacilities
     */
    public function __construct($roomId=NULL, $images=NULL, $nameRoom=NULL, $area=NULL, $description=NULL, $maxPersons=NULL, $maxChildren=NULL, $priceNight=NULL,
                                $status=NULL, $numberRooms=NULL, $roomFacilities=NULL)
    {
        if (!is_null($roomId) && !is_null($images) && !is_null($nameRoom) && !is_null($area) && !is_null($description)
            && !is_null($maxPersons) && !is_null($maxChildren) && !is_null($priceNight) && !is_null($status) && !is_null($numberRooms) && !is_null($roomFacilities)) {
            $this->roomId = $roomId;
            $this->images = $images;
            $this->nameRoom = $nameRoom;
            $this->area = $area;
            $this->description = $description;
            $this->maxPersons = $maxPersons;
            $this->maxChildren = $maxChildren;
            $this->priceNight = $priceNight;
            $this->status = $status;
            $this->numberRooms = $numberRooms;
            $this->roomFacilities = $roomFacilities;
        }
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
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return mixed
     */
    public function getNameRoom()
    {
        return $this->nameRoom;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getMaxPersons()
    {
        return $this->maxPersons;
    }

    /**
     * @return mixed
     */
    public function getMaxChildren()
    {
        return $this->maxChildren;
    }

    /**
     * @return mixed
     */
    public function getPriceNight()
    {
        return $this->priceNight;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getNumberRooms()
    {
        return $this->numberRooms;
    }

    /**
     * @return mixed
     */
    public function getRoomFacilities()
    {
        return $this->roomFacilities;
    }


}
?>