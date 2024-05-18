<?php


require_once ("Model.php");

class ModelFacilities extends Model{
    private $facilitesId;
    private $facilityName;
    private $description;

    protected static $table = 'Facilities';
    protected static $primary = 'facilitesId';

    /**
     * @param $facilitesId
     * @param $facilityName
     * @param $description
     */
    public function __construct($facilitesId=NULL, $facilityName=NULL, $description=NULL)
    {
        if (!is_null($facilitesId) && !is_null($facilityName) && !is_null($description)) {
            $this->facilitesId = $facilitesId;
            $this->facilityName = $facilityName;
            $this->description = $description;
        }
    }

    /**
     * @return mixed
     */
    public function getFacilitesId()
    {
        return $this->facilitesId;
    }

    /**
     * @return mixed
     */
    public function getFacilityName()
    {
        return $this->facilityName;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }





}
?>