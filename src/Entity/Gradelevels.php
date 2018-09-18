<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gradelevels
 *
 * @ORM\Table(name="gradelevels")
 * @ORM\Entity
 */
class Gradelevels
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
     * @ORM\Column(name="gradeName", type="string", length=250, nullable=false)
     */
    private $gradename;

    /**
     * @var string
     *
     * @ORM\Column(name="gradeDescription", type="text", length=65535, nullable=true)
     */
    private $gradedescription;

    /**
     * @var string
     *
     * @ORM\Column(name="gradePoints", type="string", length=250, nullable=false)
     */
    private $gradepoints;

    /**
     * @var string
     *
     * @ORM\Column(name="gradeFrom", type="string", length=250, nullable=false)
     */
    private $gradefrom;

    /**
     * @var string
     *
     * @ORM\Column(name="gradeTo", type="string", length=250, nullable=false)
     */
    private $gradeto;


}

