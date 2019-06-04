<?php

namespace App\Model\Address\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AddressCountries
 *
 * @ORM\Table(name="address_countries")
 * @ORM\Entity
 */
class AddressCountries
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
     * @var AddressCities
     * @ORM\OneToMany(targetEntity="AddressCities", mappedBy="addressCountries")
     */
    private $addressCities;


}
