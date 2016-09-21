<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Repository\MemberAssignmentRepository;
/**
 * MemberAssignment
 * @ORM\Table(name="MemberAssignment")
 */
class MemberAssignment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $teacherID;

    /**
     * @var int
     */
    private $studentID;

    /**
     * @var int
     */
    private $projectID;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set teacherID
     *
     * @param integer $teacherID
     *
     * @return MemberAssignment
     */
    public function setTeacherID($teacherID)
    {
        $this->teacherID = $teacherID;

        return $this;
    }

    /**
     * Get teacherID
     *
     * @return int
     */
    public function getTeacherID()
    {
        return $this->teacherID;
    }

    /**
     * Set studentID
     *
     * @param integer $studentID
     *
     * @return MemberAssignment
     */
    public function setStudentID($studentID)
    {
        $this->studentID = $studentID;

        return $this;
    }

    /**
     * Get studentID
     *
     * @return int
     */
    public function getStudentID()
    {
        return $this->studentID;
    }
    /**
     * Set projectID
     *
     * @param integer $projectID
     *
     * @return MemberAssignment
     */
    public function setProjectID($projectID)
    {
        $this->projectID = $projectID;

        return $this;
    }

    /**
     * Get projectID
     *
     * @return int
     */
    public function getProjectID()
    {
        return $this->projectID;
    }
}
