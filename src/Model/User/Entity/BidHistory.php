<?php

namespace App\Model\User\Entity;

use App\Model\Product\Entity\Product;
use Doctrine\ORM\Mapping as ORM;

/**
 * BidHistory
 *
 * @ORM\Table(name="bid_history", indexes={@ORM\Index(name="fk_bid_history_product1_idx", columns={"product_id"}), @ORM\Index(name="fk_bid_history_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class BidHistory
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
     * @var \DateTime
     *
     * @ORM\Column(name="bid_time", type="datetime", nullable=false)
     */
    private $bidTime;

    /**
     * @var string
     *
     * @ORM\Column(name="bid_amount", type="string", length=45, nullable=false)
     */
    private $bidAmount;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="App\Model\Product\Entity\Product", inversedBy="bidHistory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="bidHistory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
