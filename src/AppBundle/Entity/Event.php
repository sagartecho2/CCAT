<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Repository\EventRepository;
/**
 * Event
 *
 * @ORM\Table(name="EVENT")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="TITLE", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="STARTDATE", type="datetime", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ENDDATE", type="datetime", nullable=true)
     */
    private $enddate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ISPRIORITY", type="boolean", length=1, nullable=true)
     */
    private $ispriority;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="TEACHERID", type="integer", nullable=true)
     */
    private $teacherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROJECTID", type="integer", nullable=true)
     */
    private $projectid;

    /**
     * @var string
     *
     * @ORM\Column(name="DETAILS", type="string", length=500, nullable=true)
     */
    private $details;



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
     * Set title
     *
     * @param string $title
     *
     * @return Event
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Event
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Event
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set ispriority
     *
     * @param boolean $ispriority
     *
     * @return Event
     */
    public function setIspriority($ispriority)
    {
        $this->ispriority = $ispriority;

        return $this;
    }

    /**
     * Get ispriority
     *
     * @return boolean
     */
    public function getIspriority()
    {
        return $this->ispriority;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Event
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set teacherid
     *
     * @param integer $teacherid
     *
     * @return Event
     */
    public function setTeacherid($teacherid)
    {
        $this->teacherid = $teacherid;

        return $this;
    }

    /**
     * Get teacherid
     *
     * @return integer
     */
    public function getTeacherid()
    {
        return $this->teacherid;
    }

    /**
     * Set projectid
     *
     * @param integer $projectid
     *
     * @return Event
     */
    public function setProjectid($projectid)
    {
        $this->projectid = $projectid;

        return $this;
    }

    /**
     * Get projectid
     *
     * @return integer
     */
    public function getProjectid()
    {
        return $this->projectid;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Event
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

}
