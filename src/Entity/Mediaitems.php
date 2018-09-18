<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediaitems
 *
 * @ORM\Table(name="mediaitems")
 * @ORM\Entity
 */
class Mediaitems
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
     * @ORM\Column(name="albumId", type="integer", nullable=false)
     */
    private $albumid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mediaURL", type="string", length=250, nullable=false)
     */
    private $mediaurl;

    /**
     * @var string
     *
     * @ORM\Column(name="mediaTitle", type="string", length=250, nullable=false)
     */
    private $mediatitle;

    /**
     * @var string
     *
     * @ORM\Column(name="mediaDescription", type="text", length=65535, nullable=false)
     */
    private $mediadescription;

    /**
     * @var integer
     *
     * @ORM\Column(name="mediaDate", type="integer", nullable=false)
     */
    private $mediadate;


}

