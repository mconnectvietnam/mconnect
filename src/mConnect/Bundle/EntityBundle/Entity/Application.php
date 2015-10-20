<?php

namespace mConnect\Bundle\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Application
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
     * @ORM\Column(name="code", type="string", length=50)
     */
    private $code;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeOS", type="smallint")
     */
    private $typeOS;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="smallint")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicFrom", type="datetime")
     */
    private $publicFrom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicTo", type="datetime")
     */
    private $publicTo;


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
     * @return Application
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
     * @return Application
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
     * Set status
     *
     * @param integer $status
     *
     * @return Application
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Application
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Application
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set publicFrom
     *
     * @param \DateTime $publicFrom
     *
     * @return Application
     */
    public function setPublicFrom($publicFrom)
    {
        $this->publicFrom = $publicFrom;

        return $this;
    }

    /**
     * Get publicFrom
     *
     * @return \DateTime
     */
    public function getPublicFrom()
    {
        return $this->publicFrom;
    }

    /**
     * Set publicTo
     *
     * @param \DateTime $publicTo
     *
     * @return Application
     */
    public function setPublicTo($publicTo)
    {
        $this->publicTo = $publicTo;

        return $this;
    }

    /**
     * Get publicTo
     *
     * @return \DateTime
     */
    public function getPublicTo()
    {
        return $this->publicTo;
    }
}

