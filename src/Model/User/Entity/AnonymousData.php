<?php

namespace App\Model\User\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnonymousData
 *
 * @ORM\Table(name="anonymous_data")
 * @ORM\Entity
 */
class AnonymousData
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
     * @var int
     *
     * @ORM\Column(name="anonym_number_user", type="integer", nullable=false)
     */
    private $anonymNumberUser;

    /**
     * @var string
     *
     * @ORM\Column(name="anonym_color_user", type="string", length=45, nullable=false)
     */
    private $anonymColorUser;


}
