<?php

namespace Tiziano\MovieNetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Genre
 */
class Genre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    private $movies;

    public function __construct()
    {
        $this->movies = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return Genre
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add movies
     *
     * @param \Tiziano\MovieNetBundle\Entity\Movie $movies
     * @return Genre
     */
    public function addMovie(\Tiziano\MovieNetBundle\Entity\Movie $movies)
    {
        $this->movies[] = $movies;

        return $this;
    }

    /**
     * Remove movies
     *
     * @param \Tiziano\MovieNetBundle\Entity\Movie $movies
     */
    public function removeMovie(\Tiziano\MovieNetBundle\Entity\Movie $movies)
    {
        $this->movies->removeElement($movies);
    }

    /**
     * Get movies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovies()
    {
        return $this->movies;
    }

    public function __toString()
    {
        return strval($this->getName());
    }     
}
