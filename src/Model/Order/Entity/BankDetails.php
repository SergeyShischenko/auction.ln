<?php

namespace App\Model\Order\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankDetails
 *
 * @ORM\Table(name="bank_details")
 * @ORM\Entity
 */
class BankDetails
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
     * @ORM\Column(name="name_bank", type="string", length=200, nullable=false)
     */
    private $nameBank;

    /**
     * @var string
     *
     * @ORM\Column(name="code_bank", type="string", length=45, nullable=false)
     */
    private $codeBank;

    /**
     * @var string
     *
     * @ORM\Column(name="name_ recipient", type="string", length=200, nullable=false)
     */
    private $nameRecipient;

    /**
     * @var string
     *
     * @ORM\Column(name="account_ recipient", type="string", length=45, nullable=false)
     */
    private $accountRecipient;

    /**
     * @var Order
     * @ORM\OneToMany(targetEntity="Order", mappedBy="bankDetails")
     */
    private $order;


}
