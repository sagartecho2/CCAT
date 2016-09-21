<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Repository\ProjectTitleRepository;
/**
 * ProjectTitle
 *
 * @ORM\Table(name="PROJECT_TITLE")
 * @ORM\Entity
 */
class ProjectTitle
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=100, nullable=true)
     */
    public $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="TypeID", type="integer", nullable=true)
     */
    public $typeid;



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
     * @return ProjectTitle
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
     * Set typeid
     *
     * @param integer $typeid
     *
     * @return ProjectTitle
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}
