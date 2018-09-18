<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transportation
 *
 * @ORM\Table(name="transportation")
 * @ORM\Entity
 */
class Transportation
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
     * @ORM\Column(name="transportTitle", type="string", length=250, nullable=false)
     */
    private $transporttitle;

    /**
     * @var string
     *
     * @ORM\Column(name="transportDescription", type="text", length=65535, nullable=false)
     */
    private $transportdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="transportDriverContact", type="text", length=65535, nullable=false)
     */
    private $transportdrivercontact;

    /**
     * @var string
     *
     * @ORM\Column(name="transportFare", type="string", length=250, nullable=false)
     */
    private $transportfare;


}

