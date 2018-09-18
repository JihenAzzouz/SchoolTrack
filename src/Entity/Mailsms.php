<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailsms
 *
 * @ORM\Table(name="mailsms")
 * @ORM\Entity
 */
class Mailsms
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
     * @ORM\Column(name="mailTo", type="string", length=250, nullable=false)
     */
    private $mailto;

    /**
     * @var string
     *
     * @ORM\Column(name="mailType", type="string", length=250, nullable=false)
     */
    private $mailtype;

    /**
     * @var string
     *
     * @ORM\Column(name="messageData", type="text", length=65535, nullable=false)
     */
    private $messagedata;

    /**
     * @var string
     *
     * @ORM\Column(name="messageDate", type="string", length=250, nullable=false)
     */
    private $messagedate;

    /**
     * @var string
     *
     * @ORM\Column(name="messageSender", type="string", length=250, nullable=false)
     */
    private $messagesender;


}

