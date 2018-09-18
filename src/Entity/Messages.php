<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table(name="messages")
 * @ORM\Entity
 */
class Messages
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
     * @ORM\Column(name="messageId", type="integer", nullable=false)
     */
    private $messageid;

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="fromId", type="integer", nullable=false)
     */
    private $fromid;

    /**
     * @var integer
     *
     * @ORM\Column(name="toId", type="integer", nullable=false)
     */
    private $toid;

    /**
     * @var string
     *
     * @ORM\Column(name="messageText", type="text", length=65535, nullable=false)
     */
    private $messagetext;

    /**
     * @var string
     *
     * @ORM\Column(name="dateSent", type="string", length=250, nullable=false)
     */
    private $datesent;


}

