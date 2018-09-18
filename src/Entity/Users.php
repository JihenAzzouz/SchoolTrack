<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", indexes={@ORM\Index(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="username", type="string", length=250, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="remember_token", type="string", length=250, nullable=false)
     */
    private $rememberToken;

    /**
     * @var string
     *
     * @ORM\Column(name="fullName", type="string", length=250, nullable=false)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=10, nullable=false)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="activated", type="integer", nullable=false)
     */
    private $activated = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="studentRollId", type="string", length=250, nullable=true)
     */
    private $studentrollid;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_session", type="text", length=65535, nullable=false)
     */
    private $authSession;

    /**
     * @var integer
     *
     * @ORM\Column(name="birthday", type="integer", nullable=false)
     */
    private $birthday = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNo", type="string", length=250, nullable=true)
     */
    private $phoneno;

    /**
     * @var string
     *
     * @ORM\Column(name="mobileNo", type="string", length=250, nullable=true)
     */
    private $mobileno;

    /**
     * @var integer
     *
     * @ORM\Column(name="studentClass", type="integer", nullable=true)
     */
    private $studentclass = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="parentProfession", type="string", length=250, nullable=true)
     */
    private $parentprofession;

    /**
     * @var string
     *
     * @ORM\Column(name="parentOf", type="text", length=65535, nullable=false)
     */
    private $parentof;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=250, nullable=true)
     */
    private $photo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="isLeaderBoard", type="text", length=65535, nullable=false)
     */
    private $isleaderboard;

    /**
     * @var string
     *
     * @ORM\Column(name="restoreUniqId", type="string", length=250, nullable=false)
     */
    private $restoreuniqid;

    /**
     * @var integer
     *
     * @ORM\Column(name="transport", type="integer", nullable=false)
     */
    private $transport;

    /**
     * @var integer
     *
     * @ORM\Column(name="defLang", type="integer", nullable=false)
     */
    private $deflang = '0';


}

