<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messageslist
 *
 * @ORM\Table(name="messageslist")
 * @ORM\Entity
 */
class Messageslist
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
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="toId", type="integer", nullable=false)
     */
    private $toid;

    /**
     * @var string
     *
     * @ORM\Column(name="lastMessage", type="string", length=250, nullable=false)
     */
    private $lastmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="lastMessageDate", type="string", length=250, nullable=false)
     */
    private $lastmessagedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="messageStatus", type="integer", nullable=false)
     */
    private $messagestatus;


}

