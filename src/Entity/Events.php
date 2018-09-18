<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity
 */
class Events
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
     * @ORM\Column(name="eventTitle", type="string", length=250, nullable=false)
     */
    private $eventtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="eventDescription", type="text", length=65535, nullable=true)
     */
    private $eventdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="eventFor", type="string", length=10, nullable=true)
     */
    private $eventfor;

    /**
     * @var string
     *
     * @ORM\Column(name="enentPlace", type="string", length=250, nullable=true)
     */
    private $enentplace;

    /**
     * @var string
     *
     * @ORM\Column(name="eventDate", type="string", length=250, nullable=false)
     */
    private $eventdate;


}

