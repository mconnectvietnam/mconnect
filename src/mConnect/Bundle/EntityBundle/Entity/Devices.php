<?php

namespace mConnect\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devices
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Devices
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=30)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeOS", type="smallint")
     */
    private $typeOS;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createAt", type="datetime")
     */
    private $createAt;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;


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
     * Set code
     *
     * @param string $code
     *
     * @return Devices
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set typeOS
     *
     * @param integer $typeOS
     *
     * @return Devices
     */
    public function setTypeOS($typeOS)
    {
        $this->typeOS = $typeOS;

        return $this;
    }

    /**
     * Get typeOS
     *
     * @return integer
     */
    public function getTypeOS()
    {
        return $this->typeOS;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return Devices
     */
    public function setCreateAt($createAt)
    {
        $this->createAt = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->createAt;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Devices
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }
}

