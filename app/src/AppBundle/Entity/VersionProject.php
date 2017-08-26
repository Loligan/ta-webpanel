<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VersionProject
 *
 * @ORM\Table(name="version_project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VersionProjectRepository")
 */
class VersionProject
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="isProd", type="boolean")
     */
    private $isProd;

    /**
     * @var Project
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Project")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $project;

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
     * Set url
     *
     * @param string $url
     *
     * @return VersionProject
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return VersionProject
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set isProd
     *
     * @param boolean $isProd
     *
     * @return VersionProject
     */
    public function setIsProd($isProd)
    {
        $this->isProd = $isProd;

        return $this;
    }

    /**
     * Get isProd
     *
     * @return bool
     */
    public function getIsProd()
    {
        return $this->isProd;
    }
}

