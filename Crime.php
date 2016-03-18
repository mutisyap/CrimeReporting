<?php
/**
 * Created by PhpStorm.
 * User: pta
 * Date: 3/18/16
 * Time: 9:33 PM
 */
class Crime {
    private $crimeID;
    private $crimeTime;
    private $imageUrl;
    private $reporterPhoneNumber;
    private $crimeLocation;
    private $crimeDescription;
    public function Crime($crimeId, $crimeTime, $imageUrl, $reporterPhoneNumber, $crimeLocation, $crimeDescription){
        $this->crimeID=$crimeId;
        $this->crimeTime=$crimeTime;
        $this->imageUrl=$imageUrl;
        $this->reporterPhoneNumber=$reporterPhoneNumber;
        $this->crimeLocation=$crimeLocation;
        $this->crimeDescription=$crimeDescription;
}

    public function getCrimeID()
    {
        return $this->crimeID;
    }
    public function getCrimeTime()
    {
        return $this->crimeTime;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    public function getReporterPhoneNumber()
    {
        return $this->reporterPhoneNumber;
    }

    public function getCrimeLocation()
    {
        return $this->crimeLocation;
    }

    public function getCrimeDescription()
    {
        return $this->crimeDescription;
    }

    //function to upload crime details to database

    public function uploadDetails(){

    }

}