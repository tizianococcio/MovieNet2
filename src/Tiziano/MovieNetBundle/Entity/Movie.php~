<?php

namespace Tiziano\MovieNetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 */
class Movie
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titolo = null;

    /**
     * @var string
     */
    private $sottotitolo = null;

    /**
     * @var string
     */
    private $titoloOriginale = null;

    /**
     * @var integer
     */
    private $supporto = null;

    /**
     * @var integer
     */
    private $tipoSupporto = null;

    /**
     * @var string
     */
    private $lingua = null;

    /**
     * @var \DateTime
     */
    private $dataUscita = null;

    /**
     * @var string
     */
    private $cast = null;

    /**
     * @var string
     */
    private $trama = null;

    /**
     * @var string
     */
    private $durata = null;

    /**
     * @var string
     */
    private $locandina = null;

    /**
     * @var boolean
     */
    private $visto = null;

    /**
     * @var integer
     */
    private $idGenere = null;

    /**
     * @var integer
     */
    private $idRegista = null;

    private $regista;

    private $genere;


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
     * Set titolo
     *
     * @param string $titolo
     * @return Movie
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set sottotitolo
     *
     * @param string $sottotitolo
     * @return Movie
     */
    public function setSottotitolo($sottotitolo)
    {
        $this->sottotitolo = $sottotitolo;

        return $this;
    }

    /**
     * Get sottotitolo
     *
     * @return string 
     */
    public function getSottotitolo()
    {
        return $this->sottotitolo;
    }

    /**
     * Set titoloOriginale
     *
     * @param string $titoloOriginale
     * @return Movie
     */
    public function setTitoloOriginale($titoloOriginale)
    {
        $this->titoloOriginale = $titoloOriginale;

        return $this;
    }

    /**
     * Get titoloOriginale
     *
     * @return string 
     */
    public function getTitoloOriginale()
    {
        return $this->titoloOriginale;
    }

    /**
     * Set supporto
     *
     * @param integer $supporto
     * @return Movie
     */
    public function setSupporto($supporto)
    {
        $this->supporto = $supporto;

        return $this;
    }

    /**
     * Get supporto
     *
     * @return integer 
     */
    public function getSupporto()
    {
        return $this->supporto;
    }

    /**
     * Set tipoSupporto
     *
     * @param integer $tipoSupporto
     * @return Movie
     */
    public function setTipoSupporto($tipoSupporto)
    {
        $this->tipoSupporto = $tipoSupporto;

        return $this;
    }

    /**
     * Get tipoSupporto
     *
     * @return integer 
     */
    public function getTipoSupporto()
    {
        return $this->tipoSupporto;
    }

    /**
     * Set lingua
     *
     * @param string $lingua
     * @return Movie
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;

        return $this;
    }

    /**
     * Get lingua
     *
     * @return string 
     */
    public function getLingua()
    {
        return $this->lingua;
    }

    /**
     * Set dataUscita
     *
     * @param \DateTime $dataUscita
     * @return Movie
     */
    public function setDataUscita($dataUscita)
    {
        $this->dataUscita = $dataUscita;

        return $this;
    }

    /**
     * Get dataUscita
     *
     * @return \DateTime 
     */
    public function getDataUscita()
    {
        return $this->dataUscita;
    }

    /**
     * Set cast
     *
     * @param string $cast
     * @return Movie
     */
    public function setCast($cast)
    {
        $this->cast = $cast;

        return $this;
    }

    /**
     * Get cast
     *
     * @return string 
     */
    public function getCast()
    {
        return $this->cast;
    }

    /**
     * Set trama
     *
     * @param string $trama
     * @return Movie
     */
    public function setTrama($trama)
    {
        $this->trama = $trama;

        return $this;
    }

    /**
     * Get trama
     *
     * @return string 
     */
    public function getTrama()
    {
        return $this->trama;
    }

    /**
     * Set durata
     *
     * @param string $durata
     * @return Movie
     */
    public function setDurata($durata)
    {
        $this->durata = $durata;

        return $this;
    }

    /**
     * Get durata
     *
     * @return string 
     */
    public function getDurata()
    {
        return $this->durata;
    }

    /**
     * Set locandina
     *
     * @param string $locandina
     * @return Movie
     */
    public function setLocandina($locandina)
    {
        $this->locandina = $locandina;

        return $this;
    }

    /**
     * Get locandina
     *
     * @return string 
     */
    public function getLocandina()
    {
        return $this->locandina;
    }

    /**
     * Set visto
     *
     * @param boolean $visto
     * @return Movie
     */
    public function setVisto($visto)
    {
        $this->visto = $visto;

        return $this;
    }

    /**
     * Get visto
     *
     * @return boolean 
     */
    public function getVisto()
    {
        return $this->visto;
    }

    /**
     * Set idGenere
     *
     * @param integer $idGenere
     * @return Movie
     */
    public function setIdGenere($idGenere)
    {
        $this->idGenere = $idGenere;

        return $this;
    }

    /**
     * Get idGenere
     *
     * @return integer 
     */
    public function getIdGenere()
    {
        return $this->idGenere;
    }

    /**
     * Set idRegista
     *
     * @param integer $idRegista
     * @return Movie
     */
    public function setIdRegista($idRegista)
    {
        $this->idRegista = $idRegista;

        return $this;
    }

    /**
     * Get idRegista
     *
     * @return integer 
     */
    public function getIdRegista()
    {
        return $this->idRegista;
    }

    /**
     * Set regista
     *
     * @param \Tiziano\MovieNetBundle\Entity\Director $regista
     * @return Movie
     */
    public function setRegista(\Tiziano\MovieNetBundle\Entity\Director $regista = null)
    {
        $this->regista = $regista;

        return $this;
    }

    /**
     * Get regista
     *
     * @return \Tiziano\MovieNetBundle\Entity\Director 
     */
    public function getRegista()
    {
        return $this->regista;
    }

    /**
     * Set genere
     *
     * @param \Tiziano\MovieNetBundle\Entity\Genre $genere
     * @return Movie
     */
    public function setGenere(\Tiziano\MovieNetBundle\Entity\Genre $genere = null)
    {
        $this->genere = $genere;

        return $this;
    }

    /**
     * Get genere
     *
     * @return \Tiziano\MovieNetBundle\Entity\Genre 
     */
    public function getGenere()
    {
        return $this->genere;
    }
}
