<?php

namespace App\Model\Delivery\Entity;

use App\Model\Address\Entity\AddressCities;
use Doctrine\ORM\Mapping as ORM;

/**
 * Delivery
 *
 * @ORM\Table(name="delivery", indexes={@ORM\Index(name="fk_delivery_delivery_service1_idx", columns={"delivery_service_id"}), @ORM\Index(name="fk_delivery_delivery_status1_idx", columns={"delivery_status_id"}), @ORM\Index(name="fk_delivery_address_cities1_idx", columns={"address_cities_id"})})
 * @ORM\Entity
 */
class Delivery
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
     * @ORM\Column(name="cost", type="string", length=45, nullable=false)
     */
    private $cost;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var AddressCities
     *
     * @ORM\ManyToOne(targetEntity="App\Model\Address\Entity\AddressCities", inversedBy="delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_cities_id", referencedColumnName="id")
     * })
     */
    private $addressCities;

    /**
     * @var DeliveryService
     *
     * @ORM\ManyToOne(targetEntity="DeliveryService", inversedBy="delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_service_id", referencedColumnName="id")
     * })
     */
    private $deliveryService;

    /**
     * @var DeliveryStatus
     *
     * @ORM\ManyToOne(targetEntity="DeliveryStatus", inversedBy="delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_status_id", referencedColumnName="id")
     * })
     */
    private $deliveryStatus;


}
