<?php

namespace App\Model\Delivery\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryService
 *
 * @ORM\Table(name="delivery_service")
 * @ORM\Entity
 */
class DeliveryService
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
     * @ORM\Column(name="name", type="string", length=250, nullable=false)
     */
    private $name;

    /**
     * @var Delivery
     * @ORM\OneToMany(targetEntity="Delivery", mappedBy="deliveryService")
     */
    private $delivery;


}
