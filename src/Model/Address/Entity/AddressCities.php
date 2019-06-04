<?php

namespace App\Model\Address\Entity;

use App\Model\Delivery\Entity\Delivery;
use Doctrine\ORM\Mapping as ORM;

/**
 * AddressCities
 *
 * @ORM\Table(name="address_cities", indexes={@ORM\Index(name="fk_address_cities_address_countries1_idx", columns={"address_countries_id"})})
 * @ORM\Entity
 */
class AddressCities
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var AddressCountries
     *
     * @ORM\ManyToOne(targetEntity="AddressCountries", inversedBy="addressCities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_countries_id", referencedColumnName="id")
     * })
     */
    private $addressCountries;

    /**
     * @var Address
     * @ORM\OneToMany(targetEntity="Address", mappedBy="addressCitiesId")
     */
    private $address;

    /**
     * @var Delivery
     * @ORM\OneToMany(targetEntity="App\Model\Delivery\Entity\Delivery", mappedBy="addressCities")
     */
    private $delivery;


}
