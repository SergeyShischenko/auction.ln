<?php

namespace App\Model\Delivery\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeliveryStatus
 *
 * @ORM\Table(name="delivery_status")
 * @ORM\Entity
 */
class DeliveryStatus
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
     * @ORM\Column(name="name_status", type="string", length=45, nullable=false)
     */
    private $nameStatus;

    /**
     * @var Delivery
     * @ORM\OneToMany(targetEntity="Delivery", mappedBy="deliveryStatus")
     */
    private $delivery;


}
