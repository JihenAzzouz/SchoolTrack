<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classes
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity
 */
class Classes
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
     * @ORM\Column(name="className", type="string", length=250, nullable=false)
     */
    private $classname;

    /**
     * @var string
     *
     * @ORM\Column(name="classTeacher", type="text", length=65535, nullable=false)
     */
    private $classteacher;

    /**
     * @var integer
     *
     * @ORM\Column(name="dormitoryId", type="integer", nullable=false)
     */
    private $dormitoryid;


}

