<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Booklibrary
 *
 * @ORM\Table(name="booklibrary")
 * @ORM\Entity
 */
class Booklibrary
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
     * @ORM\Column(name="bookName", type="string", length=250, nullable=false)
     */
    private $bookname;

    /**
     * @var string
     *
     * @ORM\Column(name="bookDescription", type="text", length=65535, nullable=false)
     */
    private $bookdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="bookAuthor", type="string", length=250, nullable=false)
     */
    private $bookauthor;

    /**
     * @var string
     *
     * @ORM\Column(name="bookType", type="string", length=20, nullable=false)
     */
    private $booktype;

    /**
     * @var string
     *
     * @ORM\Column(name="bookPrice", type="string", length=250, nullable=true)
     */
    private $bookprice;

    /**
     * @var string
     *
     * @ORM\Column(name="bookFile", type="string", length=250, nullable=true)
     */
    private $bookfile;

    /**
     * @var integer
     *
     * @ORM\Column(name="bookState", type="integer", nullable=true)
     */
    private $bookstate;


}

