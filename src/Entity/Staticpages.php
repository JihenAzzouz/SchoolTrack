<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staticpages
 *
 * @ORM\Table(name="staticpages")
 * @ORM\Entity
 */
class Staticpages
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
     * @ORM\Column(name="pageTitle", type="string", length=250, nullable=false)
     */
    private $pagetitle;

    /**
     * @var string
     *
     * @ORM\Column(name="pageContent", type="text", length=65535, nullable=false)
     */
    private $pagecontent;

    /**
     * @var integer
     *
     * @ORM\Column(name="pageActive", type="integer", nullable=false)
     */
    private $pageactive = '1';


}

