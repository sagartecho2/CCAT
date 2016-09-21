<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Repository\ProjectTypeRepository;
/**
 * ProjectType
 *
 * @ORM\Table(name="Project_Type")
 * @ORM\Entity
 */
class ProjectType
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
     * @ORM\Column(name="TypeName", type="string", length=100, nullable=true)
     */
    public $typename;



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
     * Set typename
     *
     * @param string $typename
     *
     * @return ProjectType
     */
    public function setTypename($typename)
    {
        $this->typename = $typename;

        return $this;
    }

    /**
     * Get typename
     *
     * @return string
     */
    public function getTypename()
    {
        return $this->typename;
    }
}
