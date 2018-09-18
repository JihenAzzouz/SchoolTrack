<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Onlineexams
 *
 * @ORM\Table(name="onlineexams")
 * @ORM\Entity
 */
class Onlineexams
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
     * @ORM\Column(name="examClass", type="string", length=250, nullable=false)
     */
    private $examclass;

    /**
     * @var integer
     *
     * @ORM\Column(name="examTeacher", type="integer", nullable=false)
     */
    private $examteacher;

    /**
     * @var integer
     *
     * @ORM\Column(name="examSubject", type="integer", nullable=false)
     */
    private $examsubject;

    /**
     * @var string
     *
     * @ORM\Column(name="examDate", type="string", length=250, nullable=false)
     */
    private $examdate;

    /**
     * @var string
     *
     * @ORM\Column(name="ExamEndDate", type="string", length=250, nullable=false)
     */
    private $examenddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="ExamShowGrade", type="integer", nullable=false)
     */
    private $examshowgrade = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="examQuestion", type="text", length=65535, nullable=false)
     */
    private $examquestion;


}

