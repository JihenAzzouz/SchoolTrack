<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="payments")
 * @ORM\Entity
 */
class Payments
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentTitle", type="string", length=250, nullable=false)
     */
    private $paymenttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentDescription", type="text", length=65535, nullable=false)
     */
    private $paymentdescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="paymentStudent", type="integer", nullable=false)
     */
    private $paymentstudent;

    /**
     * @var float
     *
     * @ORM\Column(name="paymentAmount", type="float", precision=10, scale=0, nullable=false)
     */
    private $paymentamount;

    /**
     * @var integer
     *
     * @ORM\Column(name="paymentStatus", type="integer", nullable=false)
     */
    private $paymentstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentDate", type="string", length=250, nullable=false)
     */
    private $paymentdate;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentUniqid", type="string", length=250, nullable=false)
     */
    private $paymentuniqid;

    /**
     * @var string
     *
     * @ORM\Column(name="paymentSuccessDetails", type="text", length=65535, nullable=false)
     */
    private $paymentsuccessdetails;


}

