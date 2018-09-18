<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Onlineexamsgrades
 *
 * @ORM\Table(name="onlineexamsgrades")
 * @ORM\Entity
 */
class Onlineexamsgrades
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
     * @ORM\Column(name="studentId", type="integer", nullable=false)
     */
    private $studentid;

    /**
     * @var string
     *
     * @ORM\Column(name="examQuestionsAnswers", type="text", length=65535, nullable=false)
     */
    private $examquestionsanswers;

    /**
     * @var integer
     *
     * @ORM\Column(name="examGrade", type="integer", nullable=false)
     */
    private $examgrade;

    /**
     * @var string
     *
     * @ORM\Column(name="examDate", type="string", length=250, nullable=false)
     */
    private $examdate;


}

