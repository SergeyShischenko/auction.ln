<?php

namespace App\Model\Product\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAbout
 *
 * @ORM\Table(name="product_about")
 * @ORM\Entity
 */
class ProductAbout
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
     * @ORM\Column(name="product_name", type="string", length=100, nullable=false)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="condition", type="string", length=250, nullable=false)
     */
    private $condition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="product_date", type="string", length=45, nullable=true)
     */
    private $productDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author_signature", type="string", length=45, nullable=true)
     */
    private $authorSignature;

    /**
     * @var Product
     * @ORM\OneToMany(targetEntity="Product", mappedBy="productAbout")
     */
    private $product;


}
