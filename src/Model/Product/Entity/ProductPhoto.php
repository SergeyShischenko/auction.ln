<?php

namespace App\Model\Product\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPhoto
 *
 * @ORM\Table(name="product_photo", indexes={@ORM\Index(name="product_photo_product_id_fk", columns={"product_id"})})
 * @ORM\Entity
 */
class ProductPhoto
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
     * @ORM\Column(name="url", type="string", length=250, nullable=false)
     */
    private $url;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="productPhoto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;


}
