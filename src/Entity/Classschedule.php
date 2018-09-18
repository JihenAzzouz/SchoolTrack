<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classschedule
 *
 * @ORM\Table(name="classschedule")
 * @ORM\Entity
 */
class Classschedule
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
     * @ORM\Column(name="dayOfWeek", type="string", length=10, nullable=false)
     */
    private $dayofweek;

    /**
     * @var string
     *
     * @ORM\Column(name="startTime", type="string", length=20, nullable=false)
     */
    private $starttime;

    /**
     * @var string
     *
     * @ORM\Column(name="endTime", type="string", length=20, nullable=false)
     */
    private $endtime;


}

