<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Polls
 *
 * @ORM\Table(name="polls")
 * @ORM\Entity
 */
class Polls
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
     * @ORM\Column(name="pollTitle", type="string", length=250, nullable=false)
     */
    private $polltitle;

    /**
     * @var string
     *
     * @ORM\Column(name="pollOptions", type="text", length=65535, nullable=false)
     */
    private $polloptions;

    /**
     * @var string
     *
     * @ORM\Column(name="pollTarget", type="string", length=10, nullable=false)
     */
    private $polltarget;

    /**
     * @var integer
     *
     * @ORM\Column(name="pollStatus", type="integer", nullable=false)
     */
    private $pollstatus = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="userVoted", type="text", length=65535, nullable=false)
     */
    private $uservoted;


}

