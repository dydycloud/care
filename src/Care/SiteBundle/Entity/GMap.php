<?php
namespace Care\SiteBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\MappedSuperclass
 */
abstract class GMap
{
    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    protected $address;
 
    /**
     * @var string
     *
     * @ORM\Column(name="locality", type="string", length=255, nullable=true)
     */
    protected $locality;
 
    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    protected $country;
 
    /**
     * @var float     Latitude of the position
     *
     * @ORM\Column(name="lat", type="float", nullable=true)
     */
    protected $lat;
 
    /**
     * @var float     Longitude of the position
     *
     * @ORM\Column(name="lng", type="float", nullable=true)
     */
    protected $lng;
 
    public function setAddress($address)
    {
        $this->address = $address;
    }
 
    public function getAddress()
    {
        return $this->address;
    }
 
    public function setLocality($locality)
    {
        $this->locality = $locality;
    }
 
    public function getLocality()
    {
        return $this->locality;
    }
 
    public function setCountry($country)
    {
        $this->country = $country;
    }
 
    public function getCountry()
    {
        return $this->country;
    }
 
    public function getLat()
    {
        return $this->lat;
    }
 
    public function setLat($lat)
    {
        if (is_string($lat)) {
            $lat = floatval($lat);
        }
        $this->lat = $lat;
    }
 
    public function getLng()
    {
        return $this->lng;
    }
 
    public function setLng($lng)
    {
        if (is_string($lng)) {
            $lng = floatval($lng);
        }
        $this->lng = $lng;
    }
}
?>