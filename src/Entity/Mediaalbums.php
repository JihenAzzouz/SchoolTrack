<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mediaalbums
 *
 * @ORM\Table(name="mediaalbums")
 * @ORM\Entity
 */
class Mediaalbums
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
     * @ORM\Column(name="albumTitle", type="string", length=250, nullable=false)
     */
    private $albumtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="albumDescription", type="text", length=65535, nullable=false)
     */
    private $albumdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="albumImage", type="string", length=250, nullable=false)
     */
    private $albumimage;

    /**
     * @var integer
     *
     * @ORM\Column(name="albumParent", type="integer", nullable=false)
     */
    private $albumparent = '0';


}

