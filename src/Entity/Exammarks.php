<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exammarks
 *
 * @ORM\Table(name="exammarks")
 * @ORM\Entity
 */
class Exammarks
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
     * @var integer
     *
     * @ORM\Column(name="examId", type="integer", nullable=false)
     */
    private $examid;

    /**
     * @var integer
     *
     * @ORM\Column(name="classId", type="integer", nullable=false)
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
     * @ORM\Column(name="studentId", type="integer", nullable=false)
     */
    private $studentid;

    /**
     * @var string
     *
     * @ORM\Column(name="examMark", type="string", length=250, nullable=false)
     */
    private $exammark;

    /**
     * @var string
     *
     * @ORM\Column(name="attendanceMark", type="string", length=250, nullable=false)
     */
    private $attendancemark;

    /**
     * @var string
     *
     * @ORM\Column(name="markComments", type="text", length=65535, nullable=false)
     */
    private $markcomments;


}

