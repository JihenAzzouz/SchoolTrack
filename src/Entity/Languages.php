<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity
 */
class Languages
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
     * @ORM\Column(name="languageTitle", type="string", length=250, nullable=false)
     */
    private $languagetitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="isRTL", type="integer", nullable=false)
     */
    private $isrtl;

    /**
     * @var string
     *
     * @ORM\Column(name="languagePhrases", type="text", length=65535, nullable=false)
     */
    private $languagephrases;


}

