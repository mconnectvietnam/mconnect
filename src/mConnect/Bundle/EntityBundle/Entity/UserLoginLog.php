<?php

namespace mConnect\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLoginLog
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class UserLoginLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="Devices")
     * @ORM\JoinColumn(name="device_id", referencedColumnName="id")
     */
    private $device;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="loginAt", type="datetime")
     */
    private $loginAt;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return UserLoginLog
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return integer
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set device
     *
     * @param integer $device
     *
     * @return UserLoginLog
     */
    public function setDevice($device)
    {
        $this->device = $device;

        return $this;
    }

    /**
     * Get device
     *
     * @return integer
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * Set loginAt
     *
     * @param \DateTime $loginAt
     *
     * @return UserLoginLog
     */
    public function setLoginAt($loginAt)
    {
        $this->loginAt = $loginAt;

        return $this;
    }

    /**
     * Get loginAt
     *
     * @return \DateTime
     */
    public function getLoginAt()
    {
        return $this->loginAt;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return UserLoginLog
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
}

