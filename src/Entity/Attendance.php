<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attendance
 *
 * @ORM\Table(name="attendance")
 * @ORM\Entity
 */
class Attendance
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
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=250, nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="studentId", type="integer", nullable=false)
     */
    private $studentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;


}

