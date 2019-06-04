<?php

namespace App\Model\User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 *
 * @ORM\Table(name="currency")
 * @ORM\Entity
 */
class Currency
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
     * @var string|null
     *
     * @ORM\Column(name="currency", type="string", length=45, nullable=true)
     */
    private $currency;

    /**
     * @var User
     * @ORM\OneToMany(targetEntity="User", mappedBy="currency")
     */
    private $user;


}
