<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dormitories
 *
 * @ORM\Table(name="dormitories", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Dormitories
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
     * @ORM\Column(name="dormitory", type="string", length=250, nullable=false)
     */
    private $dormitory;

    /**
     * @var string
     *
     * @ORM\Column(name="dormDesc", type="text", length=65535, nullable=true)
     */
    private $dormdesc;


}

