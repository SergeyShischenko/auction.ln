<?php

namespace App\Model\Order\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderStatus
 *
 * @ORM\Table(name="order_status")
 * @ORM\Entity
 */
class OrderStatus
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
     * @var Order
     * @ORM\OneToMany(targetEntity="Order", mappedBy="orderStatus")
     */
    private $order;


}
