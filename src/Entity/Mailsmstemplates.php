<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailsmstemplates
 *
 * @ORM\Table(name="mailsmstemplates")
 * @ORM\Entity
 */
class Mailsmstemplates
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
     * @ORM\Column(name="templateTitle", type="string", length=250, nullable=false)
     */
    private $templatetitle;

    /**
     * @var string
     *
     * @ORM\Column(name="templateMail", type="text", length=65535, nullable=false)
     */
    private $templatemail;

    /**
     * @var string
     *
     * @ORM\Column(name="templateSMS", type="text", length=65535, nullable=false)
     */
    private $templatesms;

    /**
     * @var string
     *
     * @ORM\Column(name="templateVars", type="text", length=65535, nullable=false)
     */
    private $templatevars;


}

