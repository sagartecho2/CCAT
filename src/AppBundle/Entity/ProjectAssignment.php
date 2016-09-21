<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Repository\ProjectAssignmentRepository;
/**
 * ProjectAssignment
 *
 * @ORM\Table(name="PROJECT_ASSIGNMENT")
 * @ORM\Entity
 */
class ProjectAssignment
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
     * @ORM\Column(name="ASSIGNEDBY", type="string", length=100, nullable=false)
     */
    private $assignedby;

    /**
     * @var integer
     *
     * @ORM\Column(name="TEACHERID", type="integer", nullable=false)
     */
    private $teacherid;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROJ_TYPEID", type="integer", nullable=false)
     */
    private $projTypeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROJ_TITLEID", type="integer", nullable=false)
     */
    private $projTitleid;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGO", type="string", length=250, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGODESC", type="string", length=500, nullable=true)
     */
    private $logodesc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ISCHILD", type="boolean", length=1, nullable=true)
     */
    private $ischild;

    /**
     * @var boolean
     *
     * @ORM\Column(name="GUARDIAN", type="boolean", length=1, nullable=true)
     */
    private $guardian;

    /**
     * @var string
     *
     * @ORM\Column(name="EVENTTITLE", type="string", length=100, nullable=true)
     */
    private $eventtitle;



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
     * Set assignedby
     *
     * @param string $assignedby
     *
     * @return ProjectAssignment
     */
    public function setAssignedby($assignedby)
    {
        $this->assignedby = $assignedby;

        return $this;
    }

    /**
     * Get assignedby
     *
     * @return string
     */
    public function getAssignedby()
    {
        return $this->assignedby;
    }

    /**
     * Set teacherid
     *
     * @param integer $teacherid
     *
     * @return ProjectAssignment
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
     * Set projTypeid
     *
     * @param integer $projTypeid
     *
     * @return ProjectAssignment
     */
    public function setProjTypeid($projTypeid)
    {
        $this->projTypeid = $projTypeid;

        return $this;
    }

    /**
     * Get projTypeid
     *
     * @return integer
     */
    public function getProjTypeid()
    {
        return $this->projTypeid;
    }

    /**
     * Set projTitleid
     *
     * @param integer $projTitleid
     *
     * @return ProjectAssignment
     */
    public function setProjTitleid($projTitleid)
    {
        $this->projTitleid = $projTitleid;

        return $this;
    }

    /**
     * Get projTitleid
     *
     * @return integer
     */
    public function getProjTitleid()
    {
        return $this->projTitleid;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return ProjectAssignment
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set logodesc
     *
     * @param string $logodesc
     *
     * @return ProjectAssignment
     */
    public function setLogodesc($logodesc)
    {
        $this->logodesc = $logodesc;

        return $this;
    }

    /**
     * Get logodesc
     *
     * @return string
     */
    public function getLogodesc()
    {
        return $this->logodesc;
    }

    /**
     * Set ischild
     *
     * @param boolean $ischild
     *
     * @return ProjectAssignment
     */
    public function setIschild($ischild)
    {
        $this->ischild = $ischild;

        return $this;
    }

    /**
     * Get ischild
     *
     * @return boolean
     */
    public function getIschild()
    {
        return $this->ischild;
    }

    /**
     * Set guardian
     *
     * @param boolean $guardian
     *
     * @return ProjectAssignment
     */
    public function setGuardian($guardian)
    {
        $this->guardian = $guardian;

        return $this;
    }

    /**
     * Get guardian
     *
     * @return boolean
     */
    public function getGuardian()
    {
        return $this->guardian;
    }

    /**
     * Set eventtitle
     *
     * @param string $eventtitle
     *
     * @return ProjectAssignment
     */
    public function setEventtitle($eventtitle)
    {
        $this->eventtitle = $eventtitle;

        return $this;
    }

    /**
     * Get eventtitle
     *
     * @return string
     */
    public function getEventtitle()
    {
        return $this->eventtitle;
    }
}
