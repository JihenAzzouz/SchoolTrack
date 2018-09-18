<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignments
 *
 * @ORM\Table(name="assignments")
 * @ORM\Entity
 */
class Assignments
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
     * @ORM\Column(name="classId", type="text", length=65535, nullable=false)
     */
    private $classid;

    /**
     * @var integer
     *
     * @ORM\Column(name="subjectId", type="integer", nullable=false)
     */
    private $subjectid;

    /**
     * @var integer
     *
     * @ORM\Column(name="teacherId", type="integer", nullable=false)
     */
    private $teacherid;

    /**
     * @var string
     *
     * @ORM\Column(name="AssignTitle", type="string", length=250, nullable=false)
     */
    private $assigntitle;

    /**
     * @var string
     *
     * @ORM\Column(name="AssignDescription", type="text", length=65535, nullable=false)
     */
    private $assigndescription;

    /**
     * @var string
     *
     * @ORM\Column(name="AssignFile", type="string", length=250, nullable=false)
     */
    private $assignfile;

    /**
     * @var string
     *
     * @ORM\Column(name="AssignDeadLine", type="string", length=250, nullable=false)
     */
    private $assigndeadline;


}

