<?php

namespace App\Model\Address\Entity;

use App\Model\User\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="address")
 * @ORM\Entity
 */
class Address
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
     * @var AddressCities
     * @ORM\ManyToOne(targetEntity="AddressCities", inversedBy="address")
     * @ORM\JoinColumn(name="address_cities_id", referencedColumnName="id")
     */
    private $addressCitiesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street", type="string", length=45, nullable=true)
     */
    private $street;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postcode", type="string", length=45, nullable=true)
     */
    private $postcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="time_zone", type="string", length=45, nullable=true)
     */
    private $timeZone;

    /**
     * @var User
     * @ORM\OneToMany(targetEntity="App\Model\User\Entity\User", mappedBy="address")
     */
    private $user;



}
