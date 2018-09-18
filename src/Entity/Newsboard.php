<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsboard
 *
 * @ORM\Table(name="newsboard")
 * @ORM\Entity
 */
class Newsboard
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
     * @ORM\Column(name="newsTitle", type="string", length=250, nullable=false)
     */
    private $newstitle;

    /**
     * @var string
     *
     * @ORM\Column(name="newsText", type="text", length=65535, nullable=false)
     */
    private $newstext;

    /**
     * @var string
     *
     * @ORM\Column(name="newsFor", type="string", length=250, nullable=false)
     */
    private $newsfor;

    /**
     * @var integer
     *
     * @ORM\Column(name="newsDate", type="integer", nullable=false)
     */
    private $newsdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="creationDate", type="integer", nullable=false)
     */
    private $creationdate;


}

