<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examslist
 *
 * @ORM\Table(name="examslist")
 * @ORM\Entity
 */
class Examslist
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
     * @ORM\Column(name="examTitle", type="string", length=250, nullable=false)
     */
    private $examtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="examDescription", type="text", length=65535, nullable=true)
     */
    private $examdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="examDate", type="string", length=250, nullable=false)
     */
    private $examdate;


}

