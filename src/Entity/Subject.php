<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject")
 * @ORM\Entity
 */
class Subject
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
     * @ORM\Column(name="subjectTitle", type="string", length=250, nullable=false)
     */
    private $subjecttitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="classId", type="integer", nullable=false)
     */
    private $classid;

    /**
     * @var integer
     *
     * @ORM\Column(name="teacherId", type="integer", nullable=false)
     */
    private $teacherid;


}

