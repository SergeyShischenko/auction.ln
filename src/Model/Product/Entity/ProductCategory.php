<?php

namespace App\Model\Product\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCategory
 *
 * @ORM\Table(name="product_category", indexes={@ORM\Index(name="fk_product_category_product_category1_idx", columns={"parent_id"})})
 * @ORM\Entity
 */
class ProductCategory
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
     * @ORM\Column(name="name", type="string", length=200, nullable=false)
     */
    private $name;

    /**
     * @var ProductCategory
     *
     * @ORM\ManyToOne(targetEntity="ProductCategory", inversedBy="productCategoryParent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var Product
     * @ORM\OneToMany(targetEntity="Product", mappedBy="productCategory")
     */
    private $product;

    /**
     * @var ProductCategory
     * @ORM\OneToMany(targetEntity="ProductCategory", mappedBy="parent")
     */
    private $productCategoryParent;


}
