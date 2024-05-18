<?php


require_once ("Model.php");

class ModelOffres extends Model{

        private $offreId;
        private $roomId;
        private $title;
        private $description;
        private $image;
        private $offer_Starts;
        private $offer_Ends;
        private $show_on_Site;


    protected static $table = 'Offres';
    protected static $primary = 'offreId';

    /**
     * @param $offreId
     * @param $roomType
     * @param $title
     * @param $description
     * @param $image
     * @param $offer_Starts
     * @param $offer_Ends
     * @param $show_on_Site
     */
    public function __construct($offreId=NULL, $roomId=NULL, $title=NULL, $description=NULL, $image=NULL, $offer_Starts=NULL,
                                $offer_Ends=NULL, $show_on_Site=NULL) {
        if (!is_null($offreId) && !is_null($roomId) && !is_null($title) && !is_null($description) && !is_null($image)
            && !is_null($offer_Starts) && !is_null($offer_Ends) && !is_null($show_on_Site)) {

        $this->offreId = $offreId;
        $this->roomId = $roomId;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->offer_Starts = $offer_Starts;
        $this->offer_Ends = $offer_Ends;
        $this->show_on_Site = $show_on_Site;
        }
    }

    /**
     * @return mixed
     */
    public function getOffreId()
    {
        return $this->offreId;
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
    public function getTitle()
    {
        return $this->title;
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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getOfferStarts()
    {
        return $this->offer_Starts;
    }

    /**
     * @return mixed
     */
    public function getOfferEnds()
    {
        return $this->offer_Ends;
    }

    /**
     * @return mixed
     */
    public function getShowOnSite()
    {
        return $this->show_on_Site;
    }



}
?>